<?php

require('../../config.php');
require_once('lib.php');

$id = required_param('id', PARAM_INT);
list ($course, $cm) = get_course_and_cm_from_cmid($id, 'moodle_module');
$moodle_module = $DB->get_record('moodle_module', array('id'=> $cm->instance), '*', MUST_EXIST);

?>