<?php
  define('myHeader', TRUE);
  define('myFooter', TRUE);
  require "header.php";
  date_default_timezone_set('America/New_York');
  include 'includes/commentdbh.inc.php';
  include 'includes/compg.inc.php';
?>
<title>Forum</title>
<link rel='stylesheet' type='text/css' href='styles/style.css'>
<link rel='stylesheet' type='text/css' href='styles/compgstyle.css'>
<?php
if (isset($_SESSION['id'])) {
echo "<center><br><form method='POST' action='".setComments($commconn)."'>
  <input type='hidden' name='uid' value='".$_SESSION['uid']."'>
  <input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>
  <textarea class='helpme' name='message'></textarea><br>
  <button class='helpme' type='submit' name='commentSubmit'>Comment</button>
</form></center>";
} else {
  echo "<div class='message'><br>You must log in to comment<br><br></div>";
}
getComments($commconn);
?>
<?php
	require "footer.php";
?>
