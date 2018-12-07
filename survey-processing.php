<?php
$decodedDataObject =  json_decode($_POST["data"]);


if ($decodedDataObject->a1="beginner" &&
    $decodedDataObject->a2="happy" &&
    $decodedDataObject->a3="edible" &&
    $decodedDataObject->a1="yes" &&
    $decodedDataObject->a1="yes" &&
    $decodedDataObject->a1="yes")
{
  $strain="sativa";
 }


 $dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
  $dbusername = "browne9_weedsite";
  $dbpassword = "g@5o4nFUJ7ha";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `Strains` (`id`, `strain`)
VALUES (NULL, '$strain');");

$stmt->execute();
echo('{
  "strain":"$strain"
}');

//header("Location: dashboard.php");
 ?>
