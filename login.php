<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="css/header.css" />
  <link rel="stylesheet" type="text/css" href="css/login.css" />


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
            <!-- <li><a href="#">Learn More</a></li> -->
            <li><a href="register.php">Register</a></li>
            <li><a href="login.php">Login</a></li>
            <li><a href="aboutpage.php">About</a></li>
          </ul>
        </div>
      </nav>
    </header>
    </div>


<img src="images/bar1.png">

<div id = "center">
  <h2 align="center">Log in</h2>
  <form align="center" method='POST' action='process-login.php'>
      <div id = "email">E-mail: <input type='email' name="username" placeholder="example@example.com" /></div>
      <div id = "password">Password: <input type='password' name="password" placeholder="Your password"/></div>
      <!-- <button><img id="login" type ='submit' src="buttons/login.png"></button> -->
    <input id = "button" type='submit' text="log in">
  </form>
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
