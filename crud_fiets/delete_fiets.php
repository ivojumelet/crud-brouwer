<?php
// auteur: Wigmans
// functie: verwijder een bier op basis van de id
include 'functions.php';

// Haal bier uit de database
if(isset($_GET['id'])){

    // test of insert gelukt is
    if(deleteFiets($_GET['id']) == true){
        echo '<script>alert("Fietscode: ' . $_GET['id'] . ' is verwijderd")</script>';
        echo "<script> location.replace('crud_fietsen.php'); </script>";
    } else {
        echo '<script>alert("Fiets is NIET verwijderd")</script>';
    }
}
?>

