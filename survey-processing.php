<?php
$decodedDataObject =  json_decode($_POST["q1"]);
echo($decodedDataObject["a1"]);

$dsn = "mysql:host=localhost;dbname=browne9_As1;charset=utf8mb4";
$dbusername = "browne9_imm";
$dbpassword = "receWO5tmv&q";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

// $stmt = $pdo->prepare("INSERT INTO `` (`id`, `name`, `email`, `games`,`esports`,`competitions`,`role`)
// VALUES ('$id', '$name', '$email', '$games','$esports','$competitions','$role');");
//
// $stmt->execute();
echo('{"success":
  "true"
}');

//header("Location: dashboard.php");
 ?>
