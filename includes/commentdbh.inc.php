<?php
$BBServername = "";
$BBUsername = "";
$BBPassword = "";
$BBName = "";
$commconn = mysqli_connect($BBServername, $BBUsername, $BBPassword, $BBName);
if (!$commconn) {
    die("Connection Failed: ".mysqli_connect_error());
}
