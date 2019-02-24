<!DOCTYPE html>
<html>
<head>
  <!-- <link rel="stylesheet" href="css/header.css" /> -->
  <!-- <link rel="stylesheet" href="css/homepage.css" /> -->

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/register.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-social.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap-social.scss" />
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
    </header>
    </div>
<!--contents  -->
<div class="page-content">
<div class="wrapper">

  <div class="imgdiv">
    <img class="regimg" src="images/register_image.png">
    <div class="alltext">
      <h1 class="img_title">Register</h1>
      <div class="textboxx">
      <p class="img_text">Create an account and get the benefit of having access to a more extensive
      survey and getting better, more suitable reccomendations.</p>
      </div>
    </div>
  </div>

<form method='POST' action='process-register.php'>
  <div id="form">
    <div id="textboxes">
          <div class="label" id ="left">
            <label>Email:</label>
            <input class="textbox" type='email' name="password" placeholder="example@example.com"/>
          </div>
          <div class="label">
            <label>Password:</label>
            <input class="textbox" type='password' name="password" placeholder="Your password"/>
          </div>
    </div>
<input id ="createbtn" type='submit' value="Create">
</form>
</div>
</div>
</div>

    <!--Footer-->
    <div>
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
