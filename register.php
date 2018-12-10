<?php
include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/register.css" />

    <img id="image" src = "images/Register.png">

		<form class="form" method='POST' action='process-register.php'>
        <div>Email: <input id="email" type='email' name="email" /></div>

        <div>Password: <input id="password" type='password' name="password" placeholder="Your password"/></div>

			  <input id = "button" type='submit' text="log in">
		</form>

    <!-- <?php
    // include('footer.php')
  ?> -->
