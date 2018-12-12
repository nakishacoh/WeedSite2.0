<?php
include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/login.css" />
<img src="images/bar1.png">
  <h2>Log in</h2>
  <form class="form" method='POST' action='process-login.php'>
      <div id = "email">E-mail: <input type='email' name="username" placeholder="example@example.com" /></div>
      <div id = "password">Password: <input type='password' name="password" placeholder="Your password"/></div>
      <!-- <button><img id="login" type ='submit' src="buttons/login.png"></button> -->
    <input id = "button" type='submit' text="log in">
  </form>
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
