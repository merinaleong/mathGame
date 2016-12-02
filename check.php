<?php
  session_start();
  extract($_POST);
  if (strcmp($email, "a@a.a")==0 && strcmp($password, "aaa")==0) {
    $SESSION["checked"] = 1;
    header("Location: mathGame.php");
  } else {
    $msg = "Invalid login credentials.";
    header("Location: index.php?msg=$msg");
  }
?>
