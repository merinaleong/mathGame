<?php
  session_start();


  if(!isset($_SESSION["checked"])){
    include("include/header.php");
    $sentence = "";
  }

    if (!isset($total)){
      $total = 0;
    }
    if (!isset($score)){
      $score = 0;
    }

    extract($_POST);
    if (isset($num1) && isset($num2) && isset($signs) && isset($user)) {

          $sentence = "";
          if (!is_numeric($user)){
            $sentence = "Please enter a valid number.";
          } else if ($signs == 1) {
            $answer = $num1 + $num2;
            if ($answer == $user){
              $sentence = "Correct!";
              $score++;
            } else {
              $sentence = "Wrong! $num1 + $num2 is $answer";
            }
            $total++;
          } else {
            $answer = $num1 - $num2;
            if ($answer == $user){
              $sentence = "Correct!";
              $score++;
            } else {
              $sentence = "Wrong! $num1 - $num2 is $answer";
            }
            $total++;
          }
        }
        $num1 = rand(0, 20);
        $num2 = rand(0, 20);
        $signs = rand(1, 2);
        $stringSigns = "";

        if ($signs == "1"){
          $stringSigns = "+";
        } else {
          $stringSigns = "-";
        }
    ?>
<div id="logOut">
  <a href="logout.php"><input class="button btn btn-default" type="submit" name="logOut" value="Log Out" /></a>
</div>
    <div id="title">
      <p> Let's play a math game! </p>
        <hr />
        <form action="mathGame.php" method="post" class="form-horizontal">
          <div class="container">
            <div id="equation">
            <p><?php echo $num1; ?>&nbsp;<?php echo $stringSigns; ?>&nbsp;<?php echo $num2; ?></p>
            </div>

        <input type="hidden" name="num1" value="<?php echo $num1; ?>" />
        <input type="hidden" name="num2" value="<?php echo $num2; ?>" />
        <input type="hidden" name="signs" value="<?php echo $signs; ?>" />
        <input type="hidden" name="total" value="<?php echo $total; ?>" />
        <input type="hidden" name="score" value="<?php echo $score; ?>" />
      </div>

        <div class="row1">
            <p><?php echo $sentence; ?></p>
            <p><?php echo $score . " / " . $total; ?></p>
        </div>
    </div>
  <div class="answer">
  <input type="text" class="text1 form-control" name="user" size="10" placeholder=" Enter Answer"/>
  <input class="button1 btn btn-default btn-lg" type="submit" name="answer" value="Submit" />
</div>
</div>
  </div>
    </form>

<?php include("include/footer.php"); ?>
