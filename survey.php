<?php
$dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
  $dbusername = "browne9_weedsite";
  $dbpassword = "g@5o4nFUJ7ha";

  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $stmt = $pdo->prepare("SELECT * FROM `Survey1`");
  $stmt->execute();

$idVal=1;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-social.scss" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>
  <!--  f-->
    <!-- <div class="container"> -->
    <header>
      <!-- <nav >
        <ul class="navigation">
          <li><a href="homepage.php">Home</a></li>
          <li><a href="survey.php">Survey</a></li>
          <li><a href="learnmore.php">Learn More</a></li>
          <li><a href="register.php">Register</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="aboutpage.php">About</a></li>
        </ul>
    </nav> -->
    <nav class="navbar navbar-expand-sm bg navbar">
     <a class="navbar-brand" href="index.php"><img class="heading "src="images/logo.png"></a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
       <span class="navbar-toggler-icon"></span>
     </button>
     <div class="collapse navbar-collapse" id="collapsibleNavbar">
       <ul class="navbar-nav ml-auto ">
         <li class="nav-item">
           <a class="nav-link" href="homepage.php">Home</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="survey.php">Survey</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="learnmore.php">Learn More</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="register.php">Register</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="login.php">Login</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="aboutpage.php">About</a>
         </li>
       </ul>
     </div>
   </nav>
    </header>
    <!-- </div> -->
    <link rel="stylesheet" type="text/css" href="css/survey.css" />
  <!-- <img  id="image" src="images/sphoto.png"> -->
<span class="container">
<span id ="hide">

      <form  action="survey-processing.php" method="post" id="add">
  <!-- <img src="images/sphoto.png" id="sphoto"/> -->
<?php
while($row = $stmt->fetch()) {
        ?><div id="q<?=$idVal;?>" class="question">
        <h2 id = "pagination"><?echo($idVal)?>/6</h2>
        <h1 class="question">Q<?echo($idVal)?>:</h1>
        <p class="question"><?php echo($row["questions"]);?></p>
<?php

if ($idVal == 1)
{
  ?>
<br>

<img class="Q1" id="a1" name="q1" data-value="beginner" src="buttons/SPbuttons/tier1/1.png">
<img class="Q1" id="a1" name="q1" data-value="intermediate" src="buttons/SPbuttons/tier1/2.png">
<img class="Q1" id="a1" name="q1" data-value="expert" src="buttons/SPbuttons/tier1/3.png">

<?php
}elseif ($idVal == 2)
{
?>
<br>
<span id="alignText">
<img class="Q2" id="a2" name="q2" data-value="happy" src="buttons/SPbuttons/tier1/4.png">
<img class="Q2" id="a2" name="q2" data-value="mellow" src="buttons/SPbuttons/tier1/5.png">
<img class="Q2" id="a2" name="q2" data-value="sleepy" src="buttons/SPbuttons/tier1/6.png">
<br>
<img class="Q2" id="a2" name="q2" data-value="energetic" src="buttons/SPbuttons/tier1/7.png">
<img class="Q2" id="a2" name="q2" data-value="creative" src="buttons/SPbuttons/tier1/8.png">
<img class="Q2" id="a2" name="q2" data-value="focused" src="buttons/SPbuttons/tier1/9.png">
</span>

<?php

}elseif ($idVal == 3)
{
?>
<br>
<span id="alignText">
<img  class="Q3" id="a3" name="q3" data-value="edible" src="buttons/SPbuttons/tier1/10.png">
<img  class="Q3" id="a3" name="q3" data-value="pipe" src="buttons/SPbuttons/tier1/11.png">
<img  class="Q3" id="a3" name="q3" data-value="bong" src="buttons/SPbuttons/tier1/12.png">
<br>
<img  class="Q3" id="a3" name="q3" data-value="vape" src="buttons/SPbuttons/tier1/13.png">
<img  class="Q3" id="a3" name="q3" data-value="pills" src="buttons/SPbuttons/tier1/14.png">
<img  class="Q3" id="a3" name="q3" data-value="rolling paper" src="buttons/SPbuttons/tier1/15.png">
</span>


<?php
}elseif ($idVal == 4)
{
?>
<br>
<img  class="Q4" id="a4" name="q4" data-value="yes" src="buttons/SPbuttons/tier1/16.png">
<img  class="Q4" id="a4" name="q4" data-value="no" src="buttons/SPbuttons/tier1/17.png">


<?php
}elseif ($idVal == 5)
{
?>
<br>
<img  class="Q5" id="a5" name="q5" data-value="yes" src="buttons/SPbuttons/tier1/16.png">
<img  class="Q5" id="a5" name="q5" data-value="no" src="buttons/SPbuttons/tier1/17.png">


<?php
}elseif ($idVal == 6)
{
?>
<br>
<img  class="Q6" id="a6" name="q6" data-value="yes" src="buttons/SPbuttons/tier1/16.png">
<img  class="Q6" id="a6" name="q6" data-value="no" src="buttons/SPbuttons/tier1/17.png">

<?php
}
?>
<!--Displaying questions from database, might just use button pics instead-->
        <!-- <p><?php //echo($row["Answer A"]); ?></p>
        <p><?php //echo($row["Answer B"]); ?></p>
        <p><?php //echo($row["Answer C"]); ?></p>
        <p><?php //echo($row["Answer D"]); ?></p>
        <p><?php //echo($row["Answer E"]); ?></p>
        <p><?php //echo($row["Answer F"]); ?></p> -->
<!---->
      </div>


        <?php
        $idVal++;
         }

?>

<span class="nextprev">
<img id="Prev" src="buttons/SPbuttons/tier1/back.png">
<img id="Next"src="buttons/SPbuttons/tier1/next.png">
<!-- <img id="submitBtn" src="buttons/SPbuttons/tier1/submit.png"> -->
</span>
<input id="button" type="submit" >
</form>
</span>
<br><br>
<section id="hope">
<img src="" id="imageMain"/>
<br>
<section id="results-right">
<span id="name"></span>
<br>
<span id=type></span>
<br>
<span id="goodeffects"></span>
<br>
<span id="badeffects"></span>
<br>
<span id="thc"></span>
<br>
<span id="cdb"></span>
<br>
</section>
<section id="rec">
<img src="" id="image1" class="inline"/>

<span id="recommend1"></span>

<img src="" id="image2" class="inline"/>


<span id="recommend2"></span>

<img src="" id="image3" class="inline"/>


<span id="recommend3"></span>

</section>
<a id="create" href="register.php">Create account</a>
</section>
</span>

<script src="js/survey.js" type="text/javascript"></script>
<script src="js/ajax.js"></script>

<div>
 <footer class="footer">

<!-- <a class="btn btn-social-icon btn-twitter">
<span class="fa fa-twitter"></span>
</a> -->

<i class="fa fa-facebook-f" style="font-size:48px;color:white"></i>
<i class="fa fa-instagram" style="font-size:48px;color:white"></i>
<i class="fa fa-github" style="font-size:48px;color:white"></i>
<i class="fa fa-twitter" style="font-size:48px;color:white"></i>

      <li class="social"> <a href="http://googleplus.com " target="_blank ">
        <img class="iconimage" src="images/instagram.png "/></a>
      </li>


<!-- <a class="btn btn-social-icon btn-github">
<span class="fa fa-github"></span>
</a>

<a class="btn btn-social-icon btn-google">
<span class="fa fa-google"></span>
</a>

<a class="btn btn-social-icon btn-linkedin">
<span class="fa fa-linkedin"></span>
</a> -->

 </footer>
</div>
</body>
</html>
