<?php include("connect.php"); ?>

<h1>week 1</h1>
<?php include("Week1/opdracht-studenten-1.php"); ?>


<h1>week 2</h1>
<?php include("Week2/read.php"); ?>

<?php

foreach ($result as $persoon) {
    echo '<div style="background-color:grey";>' . $persoon["personeelnummer"] . '</div>';
    echo '<div style="background-color:green";>' . $persoon["achternaam"] . '</div>';
}

;

//echo ;
?>



<h1>week 2</h1>

   <h1> create </h1>
    <form action="create.php" method="post">
        <input type="text" name="voornaam" placeholder="voornaam" />
        <input type="text" name="achternaam" placeholder="achternaam" />
        <input type="text" name="pasfoto" placeholder="pasfoto" />

        <input type="submit" value="versturen" />
    </form>

    
    <h2>update/delete</h2>

    
<?php
    foreach ($result as $persoon) {
?>
      <form action="Week3/update.php" method="post">
        <input type="text" hidden name="personeelnummer" value="<?php echo $persoon['personeelnummer']; ?>" />
        <input type="text" name="voornaam" placeholder="voornaam" value="<?php echo $p  ersoon['voornaam']; ?>" />
        <input type="text" name="achternaam" placeholder="achternaam" />
        <input type="text" name="pasfoto" placeholder="pasfoto" />

        <input type="submit" value="update" />
        
    </form>
    <form action="Week3/delete.php" method="post">
        <input type="text" hidden name="personeelnummer" value="<?php echo $persoon['personeelnummer']; ?>" />
        <input type="submit" value="verwijderen" />
    </form>
    <?php
        
    }
    ?>
    
    
  