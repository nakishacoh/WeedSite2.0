<?php
include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/login.css" />
<img src="images/bar1.png">
<div id="cont">
  <h1>Welcome back</h1>
</div>
  <h2>Log in</h2>

  <form class="form" method='POST' action='process-login.php'>

      <div id = "email">E-mail: <input type='email' name="username" placeholder="example@example.com" /></div>

      <div id = "password">Password: <input type='password' name="password" placeholder="Your password"/></div>

      <!-- <button><img id="login" type ='submit' src="buttons/login.png"></button> -->
    <input id = "button" type='submit' text="log in">
  </form>
