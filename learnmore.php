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
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" href="css/learnmore.css" />

  <!-- <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet"> -->
</head>
<body>
    <div class="container">
      <header>
      <nav>
        <!-- <input type="checkbox" id="nav" class="hidden"> -->
        <label for="nav" class="nav-btn">
          <i></i>
          <i></i>
          <i></i>
          <i></i>
        </label>
        <div class="logo">
          <a href= "index.php"><img class="heading" src="images/logo.png"></a>
        </div>
        <div class="nav-wrapper">
          <ul>
            <li><a href="homepage.php">Home</a></li>
            <li><a href="survey.php">Survey</a></li>
            <li><a href="learnmore.php">Learn More</a></li>
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="aboutpage.php">About</a></li>
          </ul>
        </div>
      </nav>
    </header>
    </div>

    <!--Image-->
 <div id="learnImg">
  <!--  weed photo-->
      <img src="images/lmbanner.png"/>
  <!--  weed photo end-->
 </div>

 <!--Image-->
<div id="learnText">
  <h1 align="center"> Learn More </h1>
  <hr width="600" />
  <p align="center"> Cannabis is now legal in Canada and we want<br/> you to know how to use and be safe.<br/> Find out more about the lagalities in Ontario,<br/> to know the restrictions. </p>
  <button><a href="https://www.canada.ca/en/health-canada/services/drugs-medication/cannabis/laws-regulations.html">Learn more</a></button>
</div>

<!--Types of Strains-->

<!--Red Cannabis Banner-->
<img class="banner" src="images/bar1.png"/>
<h1> Types of Strains</h1>

<div id="redBack">
  <!--Sativa-->
  <h2>Sativa</h2>
  <img src="images/Chocolope.png" width:"300" height="300"/>
  <p> Cannabis Sativa plants grow tall <br/>and thin with narrow leaves. <br/> Sativa plants are also generally<br/> a lighter shade of green<br/> then their counterpart, the Indica<br/> strain. Sativa strains take longer<br/> to grow, mature, and require<br/> more light. Medicine produced from<br/> cannabis Sativa plants have lower<br/> CBD and higher THC counts.</p>
  <button><a href="#" id="satStrain">Sativa Strains</a></button>

  <!--Sativa Popup-->
  <div class="modal">
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
  </div>

  <!--Indica-->
  <h2>Indica</h2>
  <img src="images/Superskunk.png" width:"300" height="300"/>
  <p> Cannabis Indica plants are short,<br/> bushy plants with wide leaves.<br/> Indica plants typically grow faster<br/> and have a higher yield<br/> than the sativa variety. <br/>Medicine produced from cannabis Indica<br/> plants have higher CBD<br/> and lower THC counts.</p>
  <button><a href="">Indica Strains</a></button>

  <!--Hybrid-->
  <h2>Hybrid</h2>
  <img src="images/ac-dc.png" width:"300" height="300"/>
  <p>The Hyrid strain is a<br/> combination of indica and sativa plants.<br/> Leading the characteristics to be<br/> varied by percentage of sativa<br/> and indica genetics. </p>
  <button><a href="">Hybrid Strains</a></button>

</div>

<!--Deivces-->
<div>
  <h1 align="center"> Devices</h1>
  <hr width="600"/>
  <!--Bong-->
  <img src="images/Bong.jpg" width="300" height="300"/>
  <h2>Bong</h2>
  <p>A Bong is a filtration device<br/> used to collect smoke through<br/> a chamber when heated.<br/> This consists of a mouthpiece, stem, and bowl. <br/>Users who partake in this activity are<br/> experienced as novice users may experience<br/> excessive coughing and throat irritation.<p>

  <!--Pipe-->
  <img src="images/Pipe.jpg" width="300" height="300"/>
  <h2>Pipe</h2>
  <p>A pipe or bowl, is similar to a bong,<br/>  however the size is smaller, does not need water,<br/>  and portable. The effects are <br/> immediate due to the small chamber.</p>

  <!--Grinder-->
  <img src="images/grind.png" width="300" height="300"/>
  <h2>Grinder</h2>
  <p>A grinder is used to finely shred<br/>  herb to make cannabis easier to<br/>  burn and use in devices.</p>

  <!--Rolling Paper-->
  <img src="images/roll.png" width="300" height="300"/>
  <h2>Rolling Paper</h2>
  <p>Rolling paper is used to smoke a cannabis plant.<br/> It consists of small rolls of paper.<br/> If you want the most out of your cannabis plant,<br/> rolling paper is least suggested due to waste<br/> of THC and CBD percentage.</p>


  <!--Vape-->
  <img src="images/vape.jpg" width="300" height="300"/>
  <h2>Vape</h2>
  <p>A vape is an electronic pen containing THC <br/> oil or cannabis plant, which is heated <br/> to provide smoke for inhalation. <br/> Using this device is preffered for <br/> users who smoke consistently.</p>

</div>

<!--Footer-->
    <footer class="footer">
      <p class="copy">Copyright © 2018 CLAN. All Rights Reserved.</p>
      <ul class="social_icons">

          <li class="social"> <a href="http://googleplus.com " target="_blank ">
            <img class="iconimage" src="images/instagram.png "/></a>
          </li>

          <li class="social"> <a href="http://www.facebook.com " target="_blank ">
            <img class="iconimage" src="images/facebook.png "/></a>
          </li>

          <li class="social"> <a href="http://www.twitter.com " target="_blank ">
            <img class="iconimage" src="images/twitter.png"/></a>
          </li>

      </ul>
    </footer>
</div>
 <script></script>
 </body>
 </html>
