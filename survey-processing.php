<?php
$do =  json_decode($_POST["data"]);

$strain="";
if ($do->a1=="beginner" &&
    ($do->a2=="happy" || $do->a2=="creative") &&
    ($do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
    $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))

{
  $strain="Purple Haze";
 }
 if ($do->a1=="beginner" &&
    ( $do->a2=="mellow" ||  $do->a2=="focused") &&
     ($do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
     $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))
 {
    $strain="Chocolope";
 }
if ($do->a1=="beginner" &&
     $do->a2=="sleepy" &&
    ( $do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
     $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))
 {
    $strain="Obama Kush";
 }
 if ($do->a1=="beginner" &&
     $do->a2=="energetic" &&
     ($do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
     $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))
 {
    $strain="Bubba Kush";
 }
 if ($do->a1=="intermediate" &&
     ($do->a2=="happy" || $do->a2=="creative") &&
     ($do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
     $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))
 {
    $strain="Super Skunk";
 }
 if ($do->a1=="intermediate" &&
     ($do->a2=="sleepy" || $do->a2=="mellow") &&
     ($do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
     $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))
 {
    $strain="Moby Dick";
 }

 if ($do->a1=="intermediate" &&
    ( $do->a2=="energetic" || $do->a2=="focused") &&
    ( $do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
     $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))
 {
    $strain="Dutch Treat";
 }
 if ($do->a1=="expert" &&
    ( $do->a2=="happy" || $do->a2=="creative") &&
     ($do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
     $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))
 {
    $strain="Chernobyl";
 }
 if ($do->a1=="expert" &&
     ($do->a2=="energetic" || $do->a2=="focused") &&
     ($do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
     $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))
 {
    $strain="ACDC";
 }
 if ($do->a1=="expert" &&
     ($do->a2=="sleepy" || $do->a2=="mellow") &&
     ($do->a3=="edible" || $do->a3=="pipe" || $do->a3=="bong" ||
     $do->a3=="vape" || $do->a3=="pills" || $do->a3=="rolling paper"))
 {
    $strain="Strawberry Cough ";
 }




 $dsn = "mysql:host=localhost;dbname=chriggwl_Weedsite;charset=utf8mb4";
  $dbusername = "chriggwl_admin";
  $dbpassword = "1MT_CR80R93,";

$pdo = new PDO($dsn, $dbusername, $dbpassword);

$stmt = $pdo->prepare("INSERT INTO `Strains` (`id`, `strain`)
VALUES (NULL, '$strain');");

$stmt->execute();

$stmt2 = $pdo->prepare("SELECT * FROM `Results` WHERE `name`='$strain'");

$stmt2->execute();

$results = $stmt2->fetchAll(PDO::FETCH_ASSOC);
$json = json_encode($results);

echo($json);
//header("Location: dashboard.php");
 ?>
