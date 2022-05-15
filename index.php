

<html>
<head>
    <title>Inlog</title>
</head>
<body>
    <form action="" method="POST">
        <label>email</label>
        <input type="email" name="email"></input>
        <label>password</label>
        <input type="password" name="password"></input>
 
        <button name="Verstuur">
            Verstuur
        </button>
    </form>
    <?php
    require "../back/config.php";

    if(isset($_POST['Verstuur'])){
        $email = $_POST['email'];
        $wachtwoord = sha1($_POST['password']);

        $opdracht = "SELECT * FROM Users WHERE Email = '$email' AND wachtwoord = '$wachtwoord'";
        $resultaat = mysqli_query($mysqli, $opdracht);

        if(mysqli_num_rows($resultaat) > 0){

            $user = mysqli_fetch_array($resultaat);  
            session_start();
            $_SESSION['gebruikersnaam'] = $user['firstName'];
            $_SESSION['email'] = $user["Email"];
            header('location: /Examen/front/overview.php');
        }
        else{
            echo "Gebruikersnaam of wachtwoord verkeerd";
        }
    }

?>
</body>
</html>