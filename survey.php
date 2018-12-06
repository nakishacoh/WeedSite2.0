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
<head>
</head>
<body>
  <form method="post" action="survey-processing.php">
<?php
while($row = $stmt->fetch()) {
        ?><div id="q<?=$idVal;?>" class="question">
        <h2><?echo($idVal)?>/6</h2>
        <h1>Q<?echo($idVal)?>:</h1><p> <?php echo($row["questions"]); ?></p>
<?php

if ($idVal == 1)
{
  ?>
<input type="image" class="Q1" id="bt1" data-value="beginner" src="buttons/take_survey.png">
<input type="image" class="Q1" id="bt2" data-value="intermediate" src="buttons/take_survey.png">
<input type="image" class="Q1" id="bt3" data-value="expert" src="buttons/take_survey.png">
<?php
}elseif ($idVal == 2)
{
?>
<input type="image" class="Q2" id="bt4" data-value="happy" src="buttons/take_survey.png">
<input type="image" class="Q2" id="bt5" data-value="mellow" src="buttons/take_survey.png">
<input type="image" class="Q2" id="bt6" data-value="sleepy" src="buttons/take_survey.png">
<input type="image" class="Q2" id="bt7" data-value="energetic" src="buttons/take_survey.png">
<input type="image" class="Q2" id="bt8" data-value="creative" src="buttons/take_survey.png">
<input type="image" class="Q2" id="bt9" data-value="focused" src="buttons/take_survey.png">


<?php

}elseif ($idVal == 3)
{
?>
<input type="image" class="Q3" id="bt10" data-value="edible" src="buttons/take_survey.png">
<input type="image" class="Q3" id="bt11" data-value="pipe" src="buttons/take_survey.png">
<input type="image" class="Q3" id="bt12" data-value="bong" src="buttons/take_survey.png">
<input type="image" class="Q3" id="bt13" data-value="vape" src="buttons/take_survey.png">
<input type="image" class="Q3" id="bt14" data-value="pills" src="buttons/take_survey.png">
<input type="image" class="Q3" id="bt14" data-value="rolling paper" src="buttons/take_survey.png">



<?php
}elseif ($idVal == 4)
{
?>
<input type="image" class="Q4" id="bt15" data-value="yes" src="buttons/take_survey.png">
<input type="image" class="Q4" id="bt16" data-value="no" src="buttons/take_survey.png">


<?php
}elseif ($idVal == 5)
{
?>
<input type="image" class="Q5" id="bt17" data-value="yes" src="buttons/take_survey.png">
<input type="image" class="Q5" id="bt18" data-value="no" src="buttons/take_survey.png">


<?php
}elseif ($idVal == 6)
{
?>
<input type="image" class="Q6" id="bt19" data-value="yes" src="buttons/take_survey.png">
<input type="image" class="Q6" id="bt20" data-value="no" src="buttons/take_survey.png">

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
<input type="submit">
</form>
<!-- <script>

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



</script> -->
<script src="js/survey.js" type="text/javascript"></script>
</body>
</html>
<?php ?>
