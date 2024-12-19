<?php

include '../config/config.php';

session_start();

include '../components/menuComponents.php';
include '../components/nav.php';
include '../db/connectDB.php';
include '../db/querys.php';
include '../components/footer.php';

$emailAuxiliar = isset($_SESSION['emailUser']) ? $_SESSION['emailUser'] : '';

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../styles/nav.css" />
    <link rel="stylesheet" href="../styles/footer.css" />
    <link rel="stylesheet" href="../styles/ambEcoSoc.css" />
    <title>Aspetos Ambientais</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main class="main-body">
        <h1>
            carrinho
        </h1>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>

