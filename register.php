<html>

</html>

<?php


    require './config.php';
    if(isset($_POST['Verstuur'])){
        $email = $_POST['email'];
      $firstName = $_POST['firstName'];  
      $lastName = $_POST['lastName'];  
      $password = sha1($_POST['password']);  

      $query = "INSERT INTO Users VALUES (NULL, ' $email' , '$firstName' , '$lastName', '$password')";

        if(mysqli_query($mysqli, $query)){
            echo "Het aanmaken van een gebruiker is gelukt!";
            header('Location: /Examen/front');
        }
        else{
            echo "Het aanmaken van een gebruiker is gelukt!";
        }

    }


?>