<?php include("include/header.php");?>

<form action="check.php" method="post">
<div id="allContent">
  <p><img src="image\logo.png" id="logo"></p>
  <br />
  <span class="error">
  <?php
  if (isset($_GET["msg"])){
      echo $_GET["msg"];
  }
  ?> </span>
  <br />
  <br />
  <p><input type="text" class="form-control"name="email" size="13" placeholder=" Email " /></p>
  <p><input type="text" class="form-control" name="password" size="13" placeholder=" Password"/></p>
  <p>
    <input class="button btn btn-default" type="submit" name="logIn" value="Log In" />
  </p>
</div>
</form>
<?php include("include/footer.php"); ?>
