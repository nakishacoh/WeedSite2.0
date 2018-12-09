<?php
include('header.php')
?>
<link rel="stylesheet" type="text/css" href="css/login.css" />
<img src="images/bar1.png">

  <h1>LOGIN</h1>
  <br>
  <br>

  <form class="form" method='POST' action='process-login.php'>
      
      Username: <input type='text' name="username" />
      <br>
      Password: <input type='text' name="password" />
      <br>
      <img id="login" src="buttons/login.png">
    <!-- <input type='submit'> -->
  </form>

  <br>
  <br>
  <br>


  <?php
  include('footer.php')
  ?>
