<?php
date_default_timezone_set('America/New_York');
include 'includes/commentdbh.inc.php';
include 'includes/compg.inc.php';
$commcid = $_POST['cid'];
$commuid = $_POST['uid'];
$commdate = $_POST['date'];
$commmessage = $_POST['message'];
echo "<main><div class='wrapper-main'><section class='section-default'>
<form method='POST' action='".editComments($commconn)."'>
  <input type='hidden' name='cid' value='".$commcid."'>
  <input type='hidden' name='uid' value='".$commuid."'>
  <input type='hidden' name='date' value='".$commdate."'>
  <textarea name='message'>".$commmessage."</textarea><br>
  <button type='submit' name='commentSubmit'>Edit</button>
</form>
</section></div>";
echo "<center><form method='POST' action='compg.php'>
  <button class='helpme' type='submit'>Back</button>
</form></center></main>";
?>
<link rel="stylesheet" type="text/css" href="styles/replyedit.css">
