<!-- <!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/homepage.css" />
</head>
<body>
  <header>
    <nav >
      <ul class="navigation">
        <li><a href=""><img src="images/logo.png"></a></li>
        <li><a href="">Login</a></li>
        <li><a href="">Sign Up</a></li>
        <li><a href="">Home</a></li>
        <li><a href="">About</a></li>
        <li><a href="">User Account</a></li>
      </ul>
  </nav>
  </header> -->

  <?php
    include('header.php')
  ?>
<link rel="stylesheet" type="text/css" href="responsive/homepage.css" />
  <div>
    <!--Survey-->
      <div class="cont">
      <img src="images/image_1.png" class="img"/>
      <a href="survey.php"><img id="surveyB" src="buttons/take_survey.png"></a>
      </div>
  <!--Site Explanation-->

  <div class="cont">
    <img src="images/image_4.png" class="img"/>
  </div>

  <!--Cannibis Info -->
  <div class="cont">
    <img src="images/image_2.png" class="img"/>
    <a href="#"><img id="learnB" src="buttons/learn_more.png"></a>
  </div>
  <!-- About Us -->
  <div class="cont">
  <img src="images/image_3.png" class="img"/>
  <a href="#"><img id="checkUs" src="buttons/check_us_out.png"></a>
</div>
<?php
  include('footer.php')
?>

<!--
  <footer>

  </footer>
</body>
</html> -->
