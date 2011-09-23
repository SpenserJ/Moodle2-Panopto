<?php // Copyright Panopto 2009 - 2011 / With contributions from Spenser Jones (sjones@ambrose.edu)

$capabilities = array(
    'block/panopto:provision_course' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'teacher' => CAP_ALLOW,
            'editingteacher' => CAP_ALLOW,
            'manager' => CAP_ALLOW
        )
    ),
    'block/panopto:provision_multiple' => array(
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            'manager' => CAP_ALLOW
        )
    )
);
