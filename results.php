<?php
  include('header.php')
?>

<?php
$dsn = "mysql:host=localhost;dbname=browne9_Weedsite;charset=utf8mb4";
  $dbusername = "browne9_weedsite";
  $dbpassword = "g@5o4nFUJ7ha";

  $pdo = new PDO($dsn, $dbusername, $dbpassword);
  $stmt = $pdo->prepare("SELECT * FROM `Results`");
  $stmt->execute();


?>

<fieldset id="">
  <h2>Your Results</h2>

  <?php
  //show records (process results)
  while($row = $stmt->fetch()) {
    //echo($row["email"]); //or $row[0];
    ?>
  <div>

      <h2>Strain: <?php echo($row["name"]); ?></h2>
      <p>Type: <?php echo($row["type"]); ?></p>
      <p>Used As: Pipe, Bong, Edible, or Vape</p>
      <p>Side Effects:<p> + </p> <?php echo($row["goodeffects"]); ?></p>
                      <p> - </p> <?php echo($row["badeffects"]); ?></p>

      <br/>
      <br/>

      <h2>Other Recommendations</h2>

        <div>
          <br>
          <img src="images/<?php echo($row["img1"]); ?>" />
          <button><?php echo($row["res1"]); ?></button>
        </div>

        <br>

        <div>
          <br>
          <img src="images/<?php echo($row["img2"]); ?>" />
          <button><?php echo($row["res2"]); ?></button>
        </div>

        <br>


        <div>
          <br>
          <img src="images/<?php echo($row["img3"]); ?>" />
          <button><?php echo($row["res3"]); ?></button>
        </div>
  </div>
  <?php
}
  ?>

  <div>
    <button> Create account </button>
    <p>Create an account to have suggestions for your tolerance level and more reccomendations</p>
  </div>

</fieldset>









<?php
  include('footer.php')
?>
