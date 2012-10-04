<?php
/* Copyright Panopto 2009 - 2011 / With contributions from Spenser Jones (sjones@ambrose.edu)
 * 
 * This file is part of the Panopto plugin for Moodle.
 * 
 * The Panopto plugin for Moodle is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * The Panopto plugin for Moodle is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with the Panopto plugin for Moodle.  If not, see <http://www.gnu.org/licenses/>.
 */

require_once("lib/panopto_data.php");

class block_panopto extends block_base
{
    var $blockname = "panopto";

    // Set system properties of plugin.
    function init()
    {
        $this->title = get_string('pluginname', 'block_panopto');
    }

    // Block has global config (display "Settings" link on blocks admin page)
    function has_config()
    {
        return true;
    }

    // Save global block data in mdl_config_plugins table instead of global CFG variable
    function config_save($data)
    {
        foreach ($data as $name => $value)
        {
            set_config($name, trim($value), $this->blockname);
        }
        return true;
    }
     
    // Block has per-instance config (display edit icon in block header)
    function instance_allow_config()
    {
        return true;
    }

    // Save per-instance config in custom table instead of mdl_block_instance configdata column
    function instance_config_save($data, $nolongerused = false)
    {
        global $COURSE;

        if(!empty($data->course))
        {
            return panopto_data::set_panopto_course_id($COURSE->id, $data->course);
        }
        else
        {
            // If server is not set globally, there will be no other form values to push into config.
            return true;
        }
    }

    // Generate HTML for block contents
    function get_content()
    {
        global $CFG, $COURSE, $USER;

        if ($this->content !== NULL)
        {
            return $this->content;
        }

        $this->content = new stdClass;

        // Construct the Panopto data proxy object
        $panopto_data = new panopto_data($COURSE->id);

        if(empty($panopto_data->servername) || empty($panopto_data->instancename) || empty($panopto_data->applicationkey))
        {
            $this->content->text = get_string('unconfigured', 'block_panopto');
            $this->content->footer = "";
            	
            return $this->content;
        }

        try
        {
            if(!$panopto_data->sessiongroup_id)
            {
                $this->content->text .= get_string('no_course_selected', 'block_panopto');
            }
            else
            {
                // Get course info from SOAP service.
                $course_info = $panopto_data->get_course();

                // Panopto course was deleted, or an exception was thrown while retrieving course data.
                if($course_info->Access == "Error")
                {
                    $this->content->text .= "<span class='error'>" . get_string('error_retrieving', 'block_panopto') . "</span>";
                }
                else
                {
                    // SSO form passes instance name in POST to keep URLs portable.
                    $this->content->text .= "
		        		<form name='SSO' method='post'>
							<input type='hidden' name='instance' value='$panopto_data->instancename' />
						</form>";
                     
                    $this->content->text .= '<div><b>' . get_string('live_sessions', 'block_panopto') . '</b></div>';
                    $live_sessions = $panopto_data->get_live_sessions();
                    if(!empty($live_sessions))
                    {
                        $i = 0;
                        foreach($live_sessions as $live_session)
                        {
                            // Alternate gray background for readability.
                            $altClass = ($i % 2) ? "listItemAlt" : "";
                             
                            $live_session_display_name = s($live_session->Name);
                            $this->content->text .= "<div class='listItem $altClass'>
                            $live_session_display_name
														 <span class='nowrap'>
														 	[<a href='javascript:launchNotes(\"$live_session->LiveNotesURL\")'
														 		>" . get_string('take_notes', 'block_panopto') . '</a>]';
                            if($live_session->BroadcastViewerURL)
                            {
                                $this->content->text .= "[<a href='$live_session->BroadcastViewerURL' onclick='return startSSO(this)'>" . get_string('watch_live', 'block_panopto') . '</a>]';
                            }
                            $this->content->text .= "
												 	  	 </span>
													</div>";
                            $i++;
                        }
                    }
                    else
                    {
                        $this->content->text .= '<div class="listItem">' . get_string('no_live_sessions', 'block_panopto') . '</div>';
                    }
                     
                    $this->content->text .= "<div class='sectionHeader'><b>" . get_string('completed_recordings', 'block_panopto') . '</b></div>';
                    $completed_deliveries = $panopto_data->get_completed_deliveries();
                    if(!empty($completed_deliveries))
                    {
                        $i = 0;
                        foreach($completed_deliveries as $completed_delivery)
                        {
                            // Collapse to 3 lectures by default
                            if($i == 3)
                            {
                                $this->content->text .= "<div id='hiddenLecturesDiv'>";
                            }
                            	
                            // Alternate gray background for readability.
                            $altClass = ($i % 2) ? "listItemAlt" : "";
                             
                            $completed_delivery_display_name = s($completed_delivery->DisplayName);
                            $this->content->text .= "<div class='listItem $altClass'>
					        							<a href='$completed_delivery->ViewerURL' onclick='return startSSO(this)'>
					        							$completed_delivery_display_name
					        							</a>
				        							</div>";
					        							$i++;
                        }

                        // If some lectures are hidden, display "Show all" link.
                        if($i > 3)
                        {
                            $this->content->text .= "</div>";
                            $this->content->text .= "<div id='showAllDiv'>";
                            $this->content->text .= "[<a id='showAllToggle' href='javascript:toggleHiddenLectures()'>" . get_string('show_all', 'block_panopto') . '</a>]';
                            $this->content->text .= "</div>";
                        }
                    }
                    else
                    {
                        $this->content->text .= "<div class='listItem'>" . get_string('no_completed_recordings', 'block_panopto') . '</div>';
                    }
                     
                    if($course_info->AudioPodcastURL)
                    {
                        $this->content->text .= "<div class='sectionHeader'><b>" . get_string('podcast_feeds', 'block_panopto') . "</b></div>
				        						 <div class='listItem'>
				        						 	<img src='$CFG->wwwroot/blocks/panopto/images/feed_icon.gif' />
				        							<a href='$course_info->AudioPodcastURL'>" . get_string('podcast_audio', 'block_panopto') . "</a>
				        							<span class='rssParen'>(</span
				        								><a href='$course_info->AudioRssURL' target='_blank' class='rssLink'>RSS</a
			        								><span class='rssParen'>)</span>
		                        				 </div>";
                        if($course_info->VideoPodcastURL)
                        {
                            $this->content->text .= "
				        						 <div class='listItem'>
			        								<img src='$CFG->wwwroot/blocks/panopto/images/feed_icon.gif' />	
				        						 	<a href='$course_info->VideoPodcastURL'>" . get_string('podcast_video', 'block_panopto') . "</a>
				        							<span class='rssParen'>(</span
				        								><a href='$course_info->VideoRssURL' target='_blank' class='rssLink'>RSS</a
			        								><span class='rssParen'>)</span>
		                        				 </div>";
                        }
                    }
                    $context = get_context_instance(CONTEXT_COURSE, $COURSE->id);
                    if(has_capability('moodle/course:update', $context))
                    {
                        $this->content->text .= "<div class='sectionHeader'><b>" . get_string('links', 'block_panopto') . "</b></div>
				        						 <div class='listItem'>
				        							<a href='$course_info->CourseSettingsURL' onclick='return startSSO(this)'
				        								>" . get_string('course_settings', 'block_panopto') . "</a>
			        							 </div>\n";
                        $system_info = $panopto_data->get_system_info();
                        $this->content->text .= "<div class='listItem'>
				        							" . get_string('download_recorder', 'block_panopto') . "
					        							<span class='nowrap'>
					        								(<a href='$system_info->RecorderDownloadUrl'>Windows</a>
								   							| <a href='$system_info->MacRecorderDownloadUrl'>Mac</a>)</span>
			        							</div>";
                    }
                     
                    $this->content->text .= '
						<script type="text/javascript">
			                // Function to pop up Panopto live note taker.
			                function launchNotes(url)
			        		{
								// Open empty notes window, then POST SSO form to it.
								var notesWindow = window.open("", "PanoptoNotes", "width=500,height=800,resizable=1,scrollbars=0,status=0,location=0");
								document.SSO.action = url;
								document.SSO.target = "PanoptoNotes";
								document.SSO.submit();
			
								// Ensure the new window is brought to the front of the z-order.
								notesWindow.focus();
							}
							
							function startSSO(linkElem)
							{
								document.SSO.action = linkElem.href;
								document.SSO.target = "_blank";
								document.SSO.submit();
								
								// Cancel default link navigation.
					  			return false;
					  		}
					  		
					  		function toggleHiddenLectures()
					  		{
					  			var showAllToggle = document.getElementById("showAllToggle");
					  			var hiddenLecturesDiv = document.getElementById("hiddenLecturesDiv");
					  			
					  			if(hiddenLecturesDiv.style.display == "block")
					  			{
					  				hiddenLecturesDiv.style.display = "none";
					  				showAllToggle.innerHTML = "' . get_string('show_all', 'block_panopto') . '";
					  			}
					  			else
								{
					  				hiddenLecturesDiv.style.display = "block";
					  				showAllToggle.innerHTML = "' . get_string('show_less', 'block_panopto') . '";
					  			}
					  		}
				    	</script>';
                }
            }
        }
        catch(Exception $e)
        {
            $this->content->text .= "<br><br><span class='error'>" . get_string('error_retrieving', 'block_panopto') . "</span>";
        }

        $this->content->footer = '';

        return $this->content;
    }
}
?>
