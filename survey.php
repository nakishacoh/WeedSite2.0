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
        <h1> <?php echo($row["questions"]); ?></h1>

        <p><?php echo($row["Answer A"]); ?></p>
        <p><?php echo($row["Answer B"]); ?></p>
        <p><?php echo($row["Answer C"]); ?></p>
        <p><?php echo($row["Answer D"]); ?></p>
        <p><?php echo($row["Answer E"]); ?></p>
        <p><?php echo($row["Answer F"]); ?></p>
      </div>
        <?php
        $idVal++;
         }

?>
