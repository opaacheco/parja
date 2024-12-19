<?php

include '../config/config.php';

session_start();

include '../components/menuComponents.php';
include '../components/nav.php';

$emailAuxiliar = isset($_SESSION['emailUser']) ? $_SESSION['emailUser'] : '';

?>
<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/icon?family=Material+Icons"
    />
    <link rel="shortcut icon" href="../images/logo.png" type="image/x-icon" />
    <link rel="stylesheet" href="../styles/nav.css" />
    <link rel="stylesheet" href="../styles/home.css" />
    <link rel="stylesheet" href="../styles/footer.css" />
    <title>PARJA</title>
  </head>
  <body>
  <?php 
      navBar($emailAuxiliar)
    ?>
    <main>
      <div class="hero">
        <h1 id="hum">Bem-Vindo!</h1>
        <p id="p">Venha desfrutar da melhor experiência de café da cidade.</p>
        <button id="btn"><a href="./sobre-nos.php">Sobre nós</a></button>
      </div>
      <!--
      <div class="vinyl-container">
        <div class="vinyl-cover">
          <a href="./playlist.html">
            <img
              src="images/vinyl-cover.png"
              alt="Capa do disco de vinil"
              class="cover-image"
            />
          </a>
        </div>
        <div class="overlay">
          <a href="./playlist.html">
            <img
              src="../images/vinyl-record.png"
              alt="Disco de vinil"
              class="vinyl-record"
            />
          </a>
        </div>
      </div>
      -->
    </main>
    <script src="../script/main.js"></script>
  </body>
</html>
