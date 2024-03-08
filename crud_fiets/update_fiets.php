<?php
    // functie: update fiets
    // auteur: Wigmans

    require_once('functions.php');

    // Test of er op de wijzig-knop is gedrukt 
    if(isset($_POST['btn_wzg'])){

        // test of update gelukt is
        if(updateFiets($_POST) == true){
            echo "<script>alert('Fiets is gewijzigd')</script>";
        } else {
            echo '<script>alert("Fiets is NIET gewijzigd")</script>';
        }
    }

    // Test of id is meegegeven in de URL
    if(isset($_GET['id'])){  
        // Haal alle info van de betreffende id $_GET['id']
        $id = $_GET['id'];
        $row = getFiets($id);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css">
  <title>Wijzig Fiets</title>
</head>
<body>
  <h2>Wijzig Fiets</h2>
  <form method="post">
    
    <input type="hidden" id="brouwcode" name="brouwcode" required value="<?php echo $row['brouwcode']; ?>"><br>
    <label for="merk">brouwcode:</label>
    <input type="number" id="brouwcode" name="brouwcode" required value="<?php echo $row['brouwcode']; ?>"><br>

    <label for="type">land:</label>
    <input type="text" id="land" name="land" required value="<?php echo $row['land']; ?>"><br>

    <label for="prijs">naam:</label>
    <input type="text" id="naam" name="naam" required value="<?php echo $row['naam']; ?>"><br>

    <input type="submit" name="btn_wzg" value="Wijzig">
  </form>
  <br><br>
  <a href='crud_fietsen.php'>Home</a>
</body>
</html>

<?php
    } else {
        "Geen id opgegeven<br>";
    }
?>