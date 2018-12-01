<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * the provisioned course template
 *
 * @package block_panopto
 * @copyright  Panopto 2009 - 2015
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
?>

<div class='block_panopto'>
    <div class='panoptoProcessInformation'>
        <div class='value'>
            <?php
            if (!empty($provisioneddata)) {
                if (isset($provisioneddata->accesserror) && $provisioneddata->accesserror === true) {
                ?>
                    <div class='errorMessage'>
                        <?php echo get_string('provision_access_error', 'block_panopto') ?>
                    </div>
                    <div class='attribute'><?php echo get_string('attempted_moodle_course_id', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioneddata->moodlecourseid ?></div>
                    <div class='attribute'><?php echo get_string('attempted_panopto_server', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioneddata->servername ?></div>
                <?php
                } else if (isset($provisioneddata->unknownerror) && $provisioneddata->unknownerror === true) {
                ?>
                    <div class='errorMessage'>
                        <?php echo get_string('provision_error', 'block_panopto') ?>
                    </div>
                    <div class='attribute'><?php echo get_string('attempted_moodle_course_id', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioneddata->moodlecourseid ?></div>
                    <div class='attribute'><?php echo get_string('attempted_panopto_server', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioneddata->servername ?></div>                <?php
                } else if (isset($provisioneddata->missingrequiredversion) && $provisioneddata->missingrequiredversion === true) {
                ?>
                    <div class='errorMessage'>
                        <?php echo get_string('missing_required_version', 'block_panopto') ?>
                    </div>
                    <div class='attribute'><?php echo get_string('require_panopto_version_title', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioneddata->requiredpanoptoversion ?></div>
                    <div class='attribute'><?php echo get_string('attempted_moodle_course_id', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioneddata->moodlecourseid ?></div>
                    <div class='attribute'><?php echo get_string('attempted_panopto_server', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioneddata->servername ?></div>
                <?php
                }  else if (isset($provisioneddata->provisionedpersonalfolder) && $provisioneddata->provisionedpersonalfolder === true) {
                ?>
                    <div class='errorMessage'>
                        <?php echo get_string('attempted_provisioning_personal_folder', 'block_panopto') ?>
                    </div>
                    <div class='attribute'><?php echo get_string('attempted_moodle_course_id', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioneddata->moodlecourseid ?></div>
                    <div class='attribute'><?php echo get_string('attempted_panopto_server', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioneddata->servername ?></div>
                <?php
                } else {
                ?>
                    <div class='attribute'><?php echo get_string('course_name', 'block_panopto') ?></div>
                    <div class='value'><?php echo $provisioningdata->fullname ?></div>
                    <div class='attribute'><?php echo get_string('no_users_synced', 'block_panopto') ?></div>
                    <div class='value'><?php echo get_string('no_users_synced_desc', 'block_panopto') ?></div>
                    <div class='attribute'><?php echo get_string('result', 'block_panopto') ?></div>
                    <div class="value">
                        <div class='successMessage'>
                            <?php echo get_string('provision_successful', 'block_panopto', $provisioneddata->Id) ?>
                        </div>
                    </div>
                <?php
                }
            } else {
                ?>
                <div class='errorMessage'><?php echo get_string('provision_error', 'block_panopto') ?></div>
                <?php
            }
            ?>
        </div>
    </div>
</div>
