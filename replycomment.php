<?php
session_start();
date_default_timezone_set('America/New_York');
include 'includes/commentdbh.inc.php';
include 'includes/compg.inc.php';
$commuid = $_POST['uid'];
$commmessage = $_POST['message'];
$subber = substr($commmessage, 0, 16);
echo "<main><div class='wrapper-main'><section class='section-default'>
<form method='POST' action='".setC($commconn)."'>
  <input type='hidden' name='uid' value='".$_SESSION['uid']."'>
  <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
  <textarea class='helpme' name='message'>@ ".$commuid.": ".$subber."... </textarea><br>
  <button class='helpme' type='submit' name='commentSubmit'>Comment</button>
</form></section></div>";
echo "<center><form method='POST' action='compg.php'>
  <button class='helpme' type='submit'>Back</button>
</form></center></main>";
?>
<link rel="stylesheet" type="text/css" href="styles/replyedit.css">
