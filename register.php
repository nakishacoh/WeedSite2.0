<?php
include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/register.css" />

    <!-- <img id="image" src = "images/Register.png"> -->
    <img src="images/bar1.png">
<h2>Registration</h2>
		<form class="form" method='POST' action='process-register.php'>
        <div id="email">Email: <input  type='email' name="email" placeholder="example@example.com" /></div>

        <div id="password">Password: <input  type='password' name="password" placeholder="Your password"/></div>

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
