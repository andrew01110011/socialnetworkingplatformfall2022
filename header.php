<?php
  session_start();
  define('dbhincstop', TRUE);
  require "includes/dbh.inc.php";
  if (!defined('myHeader')){
    exit('Stop doing that');
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="TEST">
    <meta name=viewport content="width=device-width, initial-scale=1">
  </head>
  <body>
    <header>
      <nav class="nav-header-main">
        <a class="header-logo" href="index.php">
          <img src="img/logo.png" alt="mmtuts logo">
        </a>
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="pg2.php">Gallery</a></li>
          <li><a href="gallery.php">Upload</a></li>
          <li><a href="compg.php">Forum</a></li>
        </ul>
      </nav>
      <div class="header-login">
        <?php
        if (!isset($_SESSION['uid'])) {
          echo '<form action="includes/login.inc.php" method="post">
            <input type="text" name="mailuid" placeholder="E-mail/Username">
            <input type="password" name="pwd" placeholder="Password">
            <button type="submit" class="submitter" name="login-submit">Login</button>
          </form>
          <a href="signup.php" class="header-signup">Signup</a>';
        } else if (isset($_SESSION['uid'])) {
          echo '<p class="userlevel">User: '.$_SESSION['uid'].' / Rank: '.$_SESSION['role'].'</p>';
          echo '<form action="includes/logout.inc.php" method="post">
            <button type="submit" class="submitter" name="login-submit">Logout</button>
          </form>';
        }
        ?>
      </div>
    </header>
