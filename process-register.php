<?php

// if the register button is clicked
  $id = $_POST['id'];
  $email = $_POST['email'];
  $password = $_POST['password'];


  // connect to the database
  $dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
  $dbusername = "browne9_weedsite";
  $dbpassword = "g@5o4nFUJ7ha";
  // var_dump($_POST);
  $pdo = new PDO($dsn, $dbusername, $dbpassword);



    $stmt = $pdo->prepare("INSERT INTO `users` (`firstname`, `lastname`, `email`, `username`, `password`)
    VALUES ('$firstname', '$lastname', '$email', '$username', '$password');");

    $stmt->execute();

  // }
//     if ($row= $stmt->fetch()){
//       $_SESSION['logged-in'] = true;
//       $_SESSION['email'] = $row['email'];
//       $_SESSION['id'] = $row['id'];
//       header("Location: homepage.php")
//   }
// else{
//
// }
  header("Location: login.php")


 ?>
