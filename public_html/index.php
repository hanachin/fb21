<?php
require '../src/facebook.php';
require '../facebook_config.php';

function h($s) {
  return htmlspecialchars($s, ENT_QUOTES);
}

$facebook = new Facebook($facebook_config);
$session = $facebook->getSession();
$fb_uid = $facebook->getUser();
?>
Welcome, your fb_uid is <span style="color:red;"><?= h($fb_uid) ?></span>
