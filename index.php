<?php
define('myHeader', TRUE);
define('myFooter', TRUE);
require "header.php";
?>
<link rel="stylesheet" type="text/css" href="styles/style.css">
<link rel="stylesheet" type="text/css" href="styles/styleindex.css">
<title>Home</title>
<main>
  <div class="wrapper-main">
    <section class="section-default">
      <!--Choosing whether or not to show ANY content on our pages depending on if we are logged in or not.-->
      <?php
      if (!isset($_SESSION['uid'])) {
        echo '<p class="login-status">You are logged out!</p>';
      } else if (isset($_SESSION['uid'])) {
        echo '<p class="login-status">You are logged in!</p>';
      }
        ?>
      </section>
    </div>
  </main>
  <?php
  require "footer.php";
  ?>
