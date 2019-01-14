<?php
$dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
  $dbusername = "browne9_weedsite";
  $dbpassword = "g@5o4nFUJ7ha";

  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $stmt = $pdo->prepare("SELECT * FROM `Results`");
  $stmt->execute();


?>

<!DOCTYPE html>
<html>
<head>


  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-social.scss" />
  <link rel="stylesheet" href="css/learnmore.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"> -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> -->
</head>
<body>
    <div class="">
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

    </div>

    <!--Image-->
 <!-- <div id="learnImg">
  <!--  weed photo-->
      <!-- <img src="images/lmbanner.png"/> -->
  <!--  weed photo end-->
 <!-- </div> -->

 <!--Image-->
<div class="learnText">
  <h1 align="center"> Know about cannibis </h1>
  <hr width="600" />
  </div>
  <p align="center"> Cannabis is now legal in Canada and we want<br/> you to know how to use and be safe.<br/> Find out more about the lagalities in Ontario,<br/> to know the restrictions. </p>
  <button><a href="https://www.canada.ca/en/health-canada/services/drugs-medication/cannabis/laws-regulations.html">Learn more</a></button>



<div class="contain">
<!-- <img class="banner" src="images/bar1.png"/> -->
<h1 class="centered"> Types of Strains</h1>
</div><div id="redBack">
  <!--Sativa-->
  <h2 class="white">Sativa</h2>
  <h2 class="white">Indica</h2>
  <h2 class="white">Hybrid</h2>
  <!-- <img src="images/Chocolope.png" width:"300" height="300"/> -->
  <p> Cannabis Sativa plants grow tall <br/>and thin with narrow leaves. <br/> Sativa plants are also generally<br/> a lighter shade of green<br/> then their counterpart, the Indica<br/> strain. Sativa strains take longer<br/> to grow, mature, and require<br/> more light. Medicine produced from<br/> cannabis Sativa plants have lower<br/> CBD and higher THC counts.</p>
  <p> Cannabis Indica plants are short,<br/> bushy plants with wide leaves.<br/> Indica plants typically grow faster<br/> and have a higher yield<br/> than the sativa variety. <br/>Medicine produced from cannabis Indica<br/> plants have higher CBD<br/> and lower THC counts.</p>
  <p>The Hyrid strain is a<br/> combination of indica and sativa plants.<br/> Leading the characteristics to be<br/> varied by percentage of sativa<br/> and indica genetics. </p>

  <button><a href="">Indica Strains</a></button>
  <button><a href="#" id="satStrain">Sativa Strains</a></button>
  <button><a href="">Hybrid Strains</a></button>
  <!--Sativa Popup-->
  <!-- <div class="modal">
    <div class="modalcontent">
      <div class="close">
        + //X button
      </div>
      <img src="images/trilllogo.png" class="img"/>
    <form type="text" class="" action="" method="">
      <input type="text" placeholder="Name" >
      <input type="text" placeholder="Email" >
      <a href="#" id="buttonSbt">Submit</a>
    </form>
    </div>
  </div> -->

  <!--Indica-->

  <!-- <img src="images/Superskunk.png" width:"300" height="300"/> -->


  <!--Hybrid-->

  <!-- <img src="images/ac-dc.png" width:"300" height="300"/> -->


</div>

<!--Deivces-->
<div>
  <h1 align="center" class="red"> Devices</h1>
  <hr width="600"/>
  <!--Bong-->
  <div class="devices1">
  <center><img src="images/bong.png" width="300" height="300"/></center>
  <center><img src="images/pipe.png" width="300" height="300"/></center>
  <center><img src="images/grind.png" width="300" height="300"/></center>


  <h2>Bong</h2>
  <h2>Pipe</h2>
  <h2>Grinder</h2>

  <p>A Bong is a filtration device<br/> used to collect smoke through<br/> a chamber when heated.<br/> This consists of a mouthpiece, stem, and bowl. <br/>Users who partake in this activity are<br/> experienced as novice users may experience<br/> excessive coughing and throat irritation.</p>
  <p>A pipe or bowl, is similar to a bong,<br/>  however the size is smaller, does not need water,<br/>  and portable. The effects are <br/> immediate due to the small chamber.</p>
  <p>A grinder is used to finely shred<br/>  herb to make cannabis easier to<br/>  burn and use in devices.</p>
</div>
  <!--Pipe-->

  <!--Grinder-->

  <!--Rolling Paper-->
  <div class="devices2">
  <center><img src="images/roll.png" width="300" height="300"/></center>
  <center><img src="images/vape.png" width="300" height="300"/></center>

  <h2>Rolling Paper</h2>
  <h2>Vape</h2>

  <p>Rolling paper is used to smoke a cannabis plant.<br/> It consists of small rolls of paper.<br/> If you want the most out of your cannabis plant,<br/> rolling paper is least suggested due to waste<br/> of THC and CBD percentage.</p>
  <p>A vape is an electronic pen containing THC <br/> oil or cannabis plant, which is heated <br/> to provide smoke for inhalation. <br/> Using this device is preffered for <br/> users who smoke consistently.</p>
</div>

  <!--Vape-->

</div>

<!--Footer-->
<footer class="footer">

<!-- <a class="btn btn-social-icon btn-twitter">
<span class="fa fa-twitter"></span>
</a> -->

<i class="fa fa-facebook-f" style="font-size:48px;color:white"></i>
<i class="fa fa-instagram" style="font-size:48px;color:white"></i>
<i class="fa fa-github" style="font-size:48px;color:white"></i>
<i class="fa fa-twitter" style="font-size:48px;color:white"></i>



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
 <script></script>
 </body>
 </html>
