<?php
$dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
  $dbusername = "browne9_weedsite";
  $dbpassword = "g@5o4nFUJ7ha";

  $pdo = new PDO($dsn, $dbusername, $dbpassword);



  $stmt = $pdo->prepare("SELECT * FROM `Survey1`");



  $stmt->execute();

$idVal=1;
while($row = $stmt->fetch()) {
        ?><div id="<?=$idVal;?>" class="question">
        <h2><?echo($idVal)?>/6</h2>
        <h1>Q<?echo($idVal)?>:</h1><p> <?php echo($row["questions"]); ?></p>
<?php
if ($idVal == 1)
{
  ?>
<input type="image" id="bt1" src="images/take_survey.png">
<input type="image" id="bt2" src="images/take_survey.png">
<input type="image" id="bt3" src="images/take_survey.png">
<?php
}elseif ($idVal == 2)
{
?>
<input type="image" id="bt4" src="images/take_survey.png">
<input type="image" id="bt5" src="images/take_survey.png">
<input type="image" id="bt6" src="images/take_survey.png">
<input type="image" id="bt7" src="images/take_survey.png">
<input type="image" id="bt8" src="images/take_survey.png">
<input type="image" id="bt9" src="images/take_survey.png">


<?php

}elseif ($idVal == 3)
{
?>
<input type="image" id="bt10" src="images/take_survey.png">
<input type="image" id="bt11" src="images/take_survey.png">
<input type="image" id="bt12" src="images/take_survey.png">
<input type="image" id="bt13" src="images/take_survey.png">
<input type="image" id="bt14" src="images/take_survey.png">



<?php
}elseif ($idVal == 4)
{
?>
<input type="image" id="bt15" src="images/take_survey.png">
<input type="image" id="bt16" src="images/take_survey.png">


<?php
}elseif ($idVal == 5)
{
?>
<input type="image" id="bt17" src="images/take_survey.png">
<input type="image" id="bt18" src="images/take_survey.png">


<?php
}elseif ($idVal == 6)
{
?>
<input type="image" id="bt19" src="images/take_survey.png">
<input type="image" id="bt20" src="images/take_survey.png">

<?php
}
?>
<!--Displaying questions from database, might just use button pics instead-->
        <!-- <p><?php //echo($row["Answer A"]); ?></p>
        <p><?php //echo($row["Answer B"]); ?></p>
        <p><?php //echo($row["Answer C"]); ?></p>
        <p><?php //echo($row["Answer D"]); ?></p>
        <p><?php //echo($row["Answer E"]); ?></p>
        <p><?php //echo($row["Answer F"]); ?></p> -->
<!---->
      </div>
        <?php
        $idVal++;
         }

?>
