<?php

include '../config/config.php';

session_start();

include '../components/menuComponents.php';
include '../components/nav.php';
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
    <link rel="stylesheet" href="../styles/topicoQuatro.css" />
    <title>Tópico 4</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main>
      <div class="title">Análise Externa</div>
      <div class="circle-container">
        <a href="./economico.php" class="section1"
          >Viabilidade<br />Económica</a
        >
        <a href="./social.php" class="section2">Aspetos<br />Sociais</a>
        <a href="./ambiental.php" class="section3">Aspetos<br />Ambientais</a>
      </div>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
