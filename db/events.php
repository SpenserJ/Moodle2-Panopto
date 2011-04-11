<?php
$sync_users = array (
    'handlerfile'      => '/blocks/panopto/event_callbacks.php',
    'handlerfunction'  => 'sync_users',
    'schedule'         => 'instant'
  );

$handlers = array (
  'role_assigned'   => $sync_users,
  'roll_unassigned' => $sync_users
);