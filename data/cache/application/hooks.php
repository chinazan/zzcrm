<?php
return array (
  'Common' => 
  array (
    'afterSave' => 
    array (
      0 => '\\Fox\\Hooks\\Common\\AssignmentEmailNotification',
      1 => '\\Fox\\Hooks\\Common\\Stream',
      2 => '\\Fox\\Hooks\\Common\\Notifications',
    ),
    'beforeRemove' => 
    array (
      0 => '\\Fox\\Hooks\\Common\\Notifications',
    ),
    'afterRemove' => 
    array (
      0 => '\\Fox\\Hooks\\Common\\Stream',
    ),
  ),
  'Note' => 
  array (
    'beforeSave' => 
    array (
      0 => '\\Fox\\Hooks\\Note\\Mentions',
    ),
    'afterSave' => 
    array (
      0 => '\\Fox\\Hooks\\Note\\Notifications',
    ),
  ),
);

?>