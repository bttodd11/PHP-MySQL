<?php
date_default_timezone_set('UTC');
$user = ' BTodd';

function display_date(){
  return date('I, jS F');
}

function welcome($user)
{
  $hour = date('H');
  $greeting = ($hour < 12) ?
    '<br> Good Morning': '<br> Good Day';
  $greeting .=$user ;
  return $greeting;
}

echo display_date();
echo welcome($user);
 ?>
