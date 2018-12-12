<?php
$decodedDataObject =  json_decode($_POST["data"]);

$strain="";
if ($decodedDataObject->a1=="beginner" &&
    $decodedDataObject->a2=="happy" || $decodedDataObject->a2=="creative" &&
    $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
    $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")

{
  $strain="Purple Haze";
 }
 elseif ($decodedDataObject->a1=="beginner" &&
     $decodedDataObject->a2=="mellow" ||  $decodedDataObject->a2=="focused" &&
     $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
     $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")
 {
    $strain="Chocolope";
 }
 elseif ($decodedDataObject->a1="beginner" &&
     $decodedDataObject->a2=="sleepy" &&
     $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
     $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")
 {
    $strain="Obama Kush";
 }
 elseif ($decodedDataObject->a1=="beginner" &&
     $decodedDataObject->a2=="energetic" &&
     $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
     $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")
 {
    $strain="Bubba Kush";
 }
 elseif ($decodedDataObject->a1=="intermediate" &&
     $decodedDataObject->a2=="happy" || $decodedDataObject->a2=="creative" &&
     $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
     $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")
 {
    $strain="Super Skunk";
 }
 elseif ($decodedDataObject->a1=="intermediate" &&
     $decodedDataObject->a2=="sleepy" || $decodedDataObject->a2=="mellow" &&
     $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
     $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")
 {
    $strain="Moby Dick";
 }

 elseif ($decodedDataObject->a1=="intermediate" &&
     $decodedDataObject->a2=="energetic" || $decodedDataObject->a2=="focused" &&
     $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
     $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")
 {
    $strain="Dutch Treat";
 }
 elseif ($decodedDataObject->a1=="expert" &&
     $decodedDataObject->a2=="happy" || $decodedDataObject->a2=="creative" &&
     $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
     $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")
 {
    $strain="Chernobyl";
 }
 elseif ($decodedDataObject->a1=="expert" &&
     $decodedDataObject->a2=="energetic" || $decodedDataObject->a2=="focused" &&
     $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
     $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")
 {
    $strain="ACDC";
 }
 elseif ($decodedDataObject->a1=="expert" &&
     $decodedDataObject->a2=="sleepy" || $decodedDataObject->a2=="mellow" &&
     $decodedDataObject->a3=="edible" || $decodedDataObject->a3=="pipe" || $decodedDataObject->a3=="bong" ||
     $decodedDataObject->a3=="vape" || $decodedDataObject->a3=="pills" || $decodedDataObject->a3=="rolling paper")
 {
    $strain="Strawberry Cough ";
 }




 $dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
  $dbusername = "browne9_weedsite";
  $dbpassword = "g@5o4nFUJ7ha";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `Strains` (`id`, `strain`)
VALUES (NULL, '$strain');");

$stmt->execute();

header("Location: results.php");

echo('{
  "strain":"$strain"
}');

//header("Location: dashboard.php");
 ?>
