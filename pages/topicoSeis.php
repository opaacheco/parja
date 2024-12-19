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
    <link rel="stylesheet" href="../styles/topicoSeis.css" />
    <title>Tópico 6</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main>
      <h1> Tutoriais de Software Odoo </h1>
      <h2>Tutorial para login do software</h2>
      <video controls>
        <source src="../videos/video1.mp4" type="video/mp4" />
        Seu navegador não suporta o elemento de vídeo.
      </video>
      <h2>Tutorial para criar um contacto</h2>
      <video controls>
        <source src="../videos/video2.mp4" type="video/mp4" />
        Seu navegador não suporta o elemento de vídeo.
      </video>
      <h2>Tutorial para criar um produto</h2>
      <video controls>
        <source src="../videos/video3.mp4" type="video/mp4" />
        Seu navegador não suporta o elemento de vídeo.
      </video>
      <h2>Tutorial para criar uma fatura</h2>
      <video controls>
        <source src="../videos/video4.mp4" type="video/mp4" />
        Seu navegador não suporta o elemento de vídeo.
      </video>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
