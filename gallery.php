<?php
session_start();
if(isset($_SESSION['role']) && $_SESSION['role']>='2'){
  define('myHeader', TRUE);
  define('myFooter', TRUE);
  require "header.php";
  echo "
  <title>Gallery</title>
  <link rel='stylesheet' type='text/css' href='styles/style.css'>
  <link rel='stylesheet' type='text/css' href='styles/stylegall.css'>
  <main>
  <div class='wrapper-main'>
  <section class='section-default'>
  ";
  if (!isset($_SESSION['id'])) {
		echo '<p class="hello">You are logged out!</p>';
	} else if (isset($_SESSION['id'])) {
		echo '<p class="hello">You are logged in!<br>You may upload files of type \'jpg\', \'jpeg\', and \'png\' and less than 5 megabytes
    <div class="formdiv">
			<form action="uploads.php" class="form1" method="post" enctype="multipart/form-data">
				<!--The following input is used to select the file to upload-->
				<input type="file" name="file" id="actual-btn" hidden>
        <label for="actual-btn" class="hi">Choose File</label>
				<button class="myButton" type="submit" name="submit">Upload File</button>
				</form>
        </div>
		';
    if(isset($_SESSION['role']) && $_SESSION['role']=='3'){
      echo "<div class='admin'><center>User role 3 is logged in.</center><div>";
    }
  }
  echo "
  </section>
  </div>
  </main>
  ";
  require "footer.php";
} else {
  header("Location: index.php?error=notloggedin");
}
?>
