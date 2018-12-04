<?php
$dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
  $dbusername = "browne9_weedsite";
  $dbpassword = "g@5o4nFUJ7ha";

  $pdo = new PDO($dsn, $dbusername, $dbpassword);



  $stmt = $pdo->prepare("SELECT * FROM `Survey1`");



  $stmt->execute();

$idVal=1;
?>
<!DOCTYPE html>
<html>
<head></head>
<body>
<?php
while($row = $stmt->fetch()) {
        ?><div id="q<?=$idVal;?>" class="question">
        <h2><?echo($idVal)?>/6</h2>
        <h1>Q<?echo($idVal)?>:</h1><p> <?php echo($row["questions"]); ?></p>
<?php

if ($idVal == 1)
{
  ?>
<input type="image" id="bt1" src="images/take_survey.png" value="beginner">
<input type="image" id="bt2" src="images/take_survey.png" value="intermediate">
<input type="image" id="bt3" src="images/take_survey.png" value="expert">
<?php
}elseif ($idVal == 2)
{
?>
<input type="image" id="bt4" src="images/take_survey.png" value="happy">
<input type="image" id="bt5" src="images/take_survey.png" value="mellow">
<input type="image" id="bt6" src="images/take_survey.png" value="sleepy">
<input type="image" id="bt7" src="images/take_survey.png" value="energetic">
<input type="image" id="bt8" src="images/take_survey.png" value="creative">
<input type="image" id="bt9" src="images/take_survey.png" value="focused">


<?php

}elseif ($idVal == 3)
{
?>
<input type="image" id="bt10" src="images/take_survey.png" value="edible">
<input type="image" id="bt11" src="images/take_survey.png" value="pipe">
<input type="image" id="bt12" src="images/take_survey.png" value="bong">
<input type="image" id="bt13" src="images/take_survey.png" value="vape">
<input type="image" id="bt14" src="images/take_survey.png" value="pills">
<input type="image" id="bt21" src="images/take_survey.png" value="rolling_paper">




<?php
}elseif ($idVal == 4)
{
?>
<input type="image" id="bt15" src="images/take_survey.png" value="yes">
<input type="image" id="bt16" src="images/take_survey.png" value="no">


<?php
}elseif ($idVal == 5)
{
?>
<input type="image" id="bt17" src="images/take_survey.png" value="yes">
<input type="image" id="bt18" src="images/take_survey.png" value="no">


<?php
}elseif ($idVal == 6)
{
?>
<input type="image" id="bt19" src="images/take_survey.png" value="yes">
<input type="image" id="bt20" src="images/take_survey.png" value="no">

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
<br><br>
<button id="Prev">Prev</button>
<button id="Next">Next</button>
<script>

var currentQ = 1;
//make a button with addEventListener
//make an object that will store the user's previous answers.

var next = document.getElementById("Next");
var prev = document.getElementById("Prev");






next.addEventListener("click",nNext,false);
prev.addEventListener("click",pPrev,false);



var qs = document.getElementsByTagName("div");


 for (var i=0; i<qs.length; i++){
   qs[i].style.display="none";
 }



   document.getElementById("q"+currentQ).style.display="block";

function nNext(){
  if(currentQ < 6){
    console.log("Next");
    currentQ  = currentQ + 1;
    for (var i=0; i<qs.length; i++){
      qs[i].style.display="none";
    }
    document.getElementById("q"+currentQ).style.display="block";

  }
  else{
    currentQ = 6;
  }



}
function pPrev(){
if (currentQ >1){
  currentQ = currentQ - 1;
  for (var i=0; i<qs.length; i++){
    qs[i].style.display="none";
  }
  document.getElementById("q"+currentQ).style.display="block";
}
  else {
    currentQ = 1;
  }
}



</script>
</body>
</html>
<?php ?>
