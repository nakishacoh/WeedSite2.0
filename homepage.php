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
<link rel="stylesheet" type="text/css" href="css/homepage.css" />

    <!--Survey-->
<div id="top">
  <!--  weed photo-->
      <img src="images/image_1.png"/>
  <!--  weed photo end-->

        <!-- <div class="surveybtn"> -->
      <a  class="surveybtn" href="survey.php">
      <img src="buttons/take_survey.png">
      </a>
    <!-- </div> -->
</div>

  <!--Site Explanation-->

<div>
  <img src="images/image_4.png"/>
</div>

  <!--Cannibis Info -->
<div id="mid">
    <img src="images/image_2.png"/>
    <a class="learnB" href="#"><img src="buttons/learn_more.png">
    </a>
</div>
  <!-- About Us -->
<div id="last">
  <img src="images/image_3.png"/>
  <a class="checkus" href="aboutpage.php">
    <img src="buttons/check_us_out.png">
  </a>
</div>

<?php
  include('footer.php')
?>

<!--
  <footer>

  </footer>
</body>
</html> -->
