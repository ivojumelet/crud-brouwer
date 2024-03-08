<?php
    // functie: formulier en database insert fiets
    // auteur: Wigmans

    echo "<h1>Insert Fiets</h1>";

    require_once('functions.php');
	 
    // Test of er op de insert-knop is gedrukt 
    if(isset($_POST) && isset($_POST['btn_ins'])){

        // test of insert gelukt is
        if(insertFiets($_POST) == true){
            echo "<script>alert('Fiets is toegevoegd')</script>";
        } else {
            echo '<script>alert("Fiets is NIET toegevoegd")</script>';
        }
    }
?>
<html>
    <body>
        <form method="post">

        <label for="merk">Brouwercode:</label>
        <input type="number" id="brouwcode" name="brouwcode" required><br>

        <label for="type">Naam:</label>
        <input type="text" id="naam" name="naam" required><br>

        <label for="prijs">Land:</label>
        <input type="text" id="land" name="land" required><br>

        <input type="submit" name="btn_ins" value="Insert">
        </form>
        
        <br><br>
        <a href='crud_fietsen.php'>Home</a>
    </body>
</html>
