<?php // Copyright Panopto 2009 - 2011 / With contributions from Spenser Jones (sjones@ambrose.edu)

require_once(dirname(__FILE__) . '/../../config.php');
require_once($CFG->libdir . '/formslib.php');
require_once('lib/panopto_data.php');

class panopto_provision_form extends moodleform
{
    protected $title = '';
    protected $description = '';

    function definition()
    {
        global $DB;
        $mform =& $this->_form;
        $courses_raw = $DB->get_records('course', null, '', 'id, shortname, fullname');
        $courses = array();
        if ($courses_raw)
        {
            foreach ($courses_raw as $course)
            {
                $courses[$course->id] = $course->shortname . ': ' . $course->fullname;
            }
        }
        asort($courses);

        $select = $mform->addElement('select', 'courses', get_string('provisioncourseselect', 'block_panopto'), $courses);
        $select->setMultiple(true);
        $select->setSize(32);
        $mform->addHelpButton('courses', 'provisioncourseselect', 'block_panopto');

        $this->add_action_buttons(true, 'Provision');
    }
}

require_login();

$context = get_context_instance(CONTEXT_SYSTEM);
$PAGE->set_context($context);

$return_url = optional_param('return_url');
if (!$return_url)
{
    $return_url = '/admin/settings.php?section=blocksettingpanopto';
}
$urlparams['return_url'] = $return_url;

$PAGE->set_url('/blocks/panopto/provision_course.php', $urlparams);
$PAGE->set_pagelayout('base');

$mform = new panopto_provision_form($PAGE->url);

if ($mform->is_cancelled())
{
    redirect(new moodle_url($return_url));
}
else
{
    $provision_title = get_string('provision_courses', 'block_panopto');
    $PAGE->set_pagelayout('base');
    $PAGE->set_title($provision_title);
    $PAGE->set_heading($provision_title);

    $course_id_param = optional_param('course_id');
    if ($course_id_param)
    {
        require_capability('block/panopto:provision_course', $context);

        $courses = array($course_id_param);
        $edit_course_url = new moodle_url($return_url);
        $PAGE->navbar->add(get_string('pluginname', 'block_panopto'), $edit_course_url);
    }
    else
    {
        require_capability('block/panopto:provision_multiple', $context);

        $data = $mform->get_data();
        if ($data)
        {
            $courses = $data->courses;
        }
        $manage_blocks = new moodle_url('/admin/blocks.php');
        $panopto_settings = new moodle_url('/admin/settings.php?section=blocksettingpanopto');
        $PAGE->navbar->add(get_string('blocks'), $manage_blocks);
        $PAGE->navbar->add(get_string('pluginname', 'block_panopto'), $panopto_settings);
    }

    $PAGE->navbar->add($provision_title, new moodle_url($PAGE->url));
    echo $OUTPUT->header();

    if ($courses)
    {
        $provisioned = array();
        $panopto_data = new panopto_data(null);
        foreach ($courses as $course_id)
        {
            if(empty($course_id))
            {
                continue;
            }
            // Set the current Moodle course to retrieve info for / provision.
            $panopto_data->moodle_course_id = $course_id;
            $provisioning_data = $panopto_data->get_provisioning_info();
            $provisioned_data  = $panopto_data->provision_course($provisioning_data);
            include 'views/provisioned_course.html.php';
        }
        echo "<a href='$return_url'>Back to config</a>";
    }
    else
    {
        $mform->display();
    }

    echo $OUTPUT->footer();
}