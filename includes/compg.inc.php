<?php
function setComments($commconn) {
    if (isset($_POST['commentSubmit'])) {
      $commuid = $_POST['uid'];
      $commdate = $_POST['date'];
      $commmessage = $_POST['message'];

      $commsql = "INSERT INTO comments1 (uid, date, message) VALUES ('".$commuid."', '".$commdate."', '".$commmessage."')";
      $commresult = $commconn->query($commsql);

      echo "<meta http-equiv='refresh' content='0'>";
      exit();
    }

}
function setC($commconn) {
    if (isset($_POST['commentSubmit'])) {
      $commuid = $_POST['uid'];
      $commdate = $_POST['date'];
      $commmessage = $_POST['message'];

      $commsql = "INSERT INTO comments1 (uid, date, message) VALUES ('".$commuid."', '".$commdate."', '".$commmessage."')";
      $commresult = $commconn->query($commsql);

      echo '<meta http-equiv="refresh" content="0; URL=compg.php">';
      exit();
    }

}
function getComments($commconn) {
  $commsql = "SELECT * FROM comments1";
  $commresult = $commconn->query($commsql);
  while ($row = $commresult->fetch_assoc()) {
    echo "<div class='comment-box'><p>";
      echo $row['uid']."<br>";
      echo $row['date']."<br>";
      echo nl2br($row['message']);
    echo "</p>";
    if (isset($_SESSION['id'])) {
      if ($_SESSION['uid']==$row['uid'] || $_SESSION['role'] == 3) {
        echo "<form class='delete-form' method='POST' action='".deleteComments($commconn)."'>
            <input type='hidden' name='cid' value='".$row['cid']."'>
            <button type='submit' name='commentDelete' >Delete</button>
        </form>
        <form class='edit-form' method='POST' action='editcomment.php'>
            <input type='hidden' name='cid' value='".$row['cid']."'>
            <input type='hidden' name='uid' value='".$row['uid']."'>
            <input type='hidden' name='date' value='".$row['date']."'>
            <input type='hidden' name='message' value='".$row['message']."'>
            <button>Edit</button>
        </form>";
      } else {
        echo "<form class='edit-form' method='POST' action='replycomment.php'>
            <input type='hidden' name='uid' value='".$row['uid']."'>
            <input type='hidden' name='message' value='".$row['message']."'>
            <button type='submit' name='commentReply' >Reply</button>
        </form>";
      }
    } else {
      echo "<p class='pphole'>You need to be logged in to reply</p>";
    }

    echo "</div>";
  }
}
function editComments($commconn) {
    if (isset($_POST['commentSubmit'])) {
      $commcid = $_POST['cid'];
      $commuid = $_POST['uid'];
      $commdate = $_POST['date'];
      $commmessage = $_POST['message'];

      $commsql = "UPDATE comments1 SET message = '$commmessage' WHERE cid='$commcid'";
      $commresult = $commconn->query($commsql);
      header("Location: compg.php");
    }
}

function deleteComments($commconn) {
  if (isset($_POST['commentDelete'])) {
    $commcid = $_POST['cid'];

    $commsql = "DELETE FROM comments1 WHERE cid = '$commcid'";
    $commresult = $commconn->query($commsql);
    echo "<meta http-equiv='refresh' content='0'>";
  }
}
