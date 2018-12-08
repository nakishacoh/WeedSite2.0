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
  <link rel="stylesheet" type="text/css" href="css/survey.css" />
  <?php
    include('header.php')
  ?>
</head>

<body>

  <img  id="image" src="images/sphoto.png">

      <form  action="survey-processing.php" method="post" id="add">
<?php
while($row = $stmt->fetch()) {
        ?><div id="q<?=$idVal;?>" class="question">
        <h2 id = "pagination"><?echo($idVal)?>/6</h2>
        <h1 class="question">Q<?echo($idVal)?>:</h1>
        <p class="question"><?php echo($row["questions"]);?></p>
<?php

if ($idVal == 1)
{
  ?>
<br>

<img class="Q1" id="a1" name="q1" data-value="beginner" src="buttons/SPbuttons/tier1/1.png">
<img class="Q1" id="a1" name="q1" data-value="intermediate" src="buttons/SPbuttons/tier1/2.png">
<img class="Q1" id="a1" name="q1" data-value="expert" src="buttons/SPbuttons/tier1/3.png">

<?php
}elseif ($idVal == 2)
{
?>
<br>
<img class="Q2" id="a2" name="q2" data-value="happy" src="buttons/SPbuttons/tier1/4.png">
<img class="Q2" id="a2" name="q2" data-value="mellow" src="buttons/SPbuttons/tier1/5.png">
<img class="Q2" id="a2" name="q2" data-value="sleepy" src="buttons/SPbuttons/tier1/6.png">
<img class="Q2" id="a2" name="q2" data-value="energetic" src="buttons/SPbuttons/tier1/7.png">
<img class="Q2" id="a2" name="q2" data-value="creative" src="buttons/SPbuttons/tier1/8.png">
<img class="Q2" id="a2" name="q2" data-value="focused" src="buttons/SPbuttons/tier1/9.png">


<?php

}elseif ($idVal == 3)
{
?>
<br>
<img  class="Q3" id="a3" name="q3" data-value="edible" src="buttons/SPbuttons/tier1/10.png">
<img  class="Q3" id="a3" name="q3" data-value="pipe" src="buttons/SPbuttons/tier1/11.png">
<img  class="Q3" id="a3" name="q3" data-value="bong" src="buttons/SPbuttons/tier1/12.png">
<img  class="Q3" id="a3" name="q3" data-value="vape" src="buttons/SPbuttons/tier1/13.png">
<img  class="Q3" id="a3" name="q3" data-value="pills" src="buttons/SPbuttons/tier1/14.png">
<img  class="Q3" id="a3" name="q3" data-value="rolling paper" src="buttons/SPbuttons/tier1/15.png">



<?php
}elseif ($idVal == 4)
{
?>
<br>
<img  class="Q4" id="a4" name="q4" data-value="yes" src="buttons/SPbuttons/tier1/16.png">
<img  class="Q4" id="a4" name="q4" data-value="no" src="buttons/SPbuttons/tier1/17.png">


<?php
}elseif ($idVal == 5)
{
?>
<br>
<img  class="Q5" id="a5" name="q5" data-value="yes" src="buttons/SPbuttons/tier1/16.png">
<img  class="Q5" id="a5" name="q5" data-value="no" src="buttons/SPbuttons/tier1/17.png">


<?php
}elseif ($idVal == 6)
{
?>
<br>
<img  class="Q6" id="a6" name="q6" data-value="yes" src="buttons/SPbuttons/tier1/16.png">
<img  class="Q6" id="a6" name="q6" data-value="no" src="buttons/SPbuttons/tier1/17.png">

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
<span class="nextprev">
<img id="Prev" src="buttons/SPbuttons/tier1/back.png">
<img id="Next"src="buttons/SPbuttons/tier1/next.png">
</span>
<input type="submit" >
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
<script src="js/ajax.js"></script>
</body>
</html>
<?php ?>
