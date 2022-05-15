<?php
    session_start();
    require '../back/config.php';

    if($_SESSION['gebruikersnaam']){
        echo "Goedemiddag " . $_SESSION['gebruikersnaam'];
    }
    else{
        header('location: /Examen/front');
    }

    $carId = $_GET ['id'];

    
    $opdracht = "SELECT * FROM Auto WHERE Id =" . $carId;


    $resultaat = mysqli_query($mysqli, $opdracht);


    if($resultaat){
        $auto = mysqli_fetch_array($resultaat);

        echo "Merk: " . $auto['Merk'] . "</br>";
        echo "Model: " . $auto['Model'] . "</br>";
        echo "Bouwjaar: " . $auto['Bouwjaar'] . "</br>";

    }
?>