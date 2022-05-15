<html>

<head>
    <title>DIT IS HET OVERVIEW GEDEELTE</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
</head>

<body>
    <?php
    session_start();

    if (!$_SESSION['gebruikersnaam']) {
        header('location: /Examen/front');
    } else {
        echo "Welkom " . $_SESSION['gebruikersnaam'];
    }
    ?>

<table class="table table-striped table-dark">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Merk</th>
      <th scope="col">Model</th>
      <th scope="col">Bouwjaar</th>
    </tr>
  </thead>
  <tbody>
   <?php
    require "../back/config.php";

    $opdracht = "SELECT * FROM Auto";

    $resultaten = mysqli_query($mysqli, $opdracht);

    if(mysqli_num_rows($resultaten) > 0){
        foreach($resultaten as $resultaat) {
          ?>
            <tr data-id=<?php echo $resultaat['id']?> >
                <td><a href=<?php echo 'auto_detail.php?id='. $resultaat['Id'] ?> />  <?php echo $resultaat['Id'] ?></td>
                <td><a href=<?php echo 'auto_detail.php?id='. $resultaat['Id'] ?> /> <?php echo $resultaat['Merk'] ?></td>
                <td><a href=<?php echo 'auto_detail.php?id='. $resultaat['Id'] ?> /> <?php echo $resultaat['Model'] ?></td>
                <td><a href=<?php echo 'auto_detail.php?id='. $resultaat['Id'] ?> /> <?php echo $resultaat['Bouwjaar'] ?></td>
            </tr>
          <?php
        }
    }
   ?>
  </tbody>
</table>
    <script src="https://code.jquery.com/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>