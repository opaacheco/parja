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
    <link rel="stylesheet" href="../styles/ambEcoSoc.css" />
    <title>Aspetos Ambientais</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main class="main-body">
      <header>
        <img
          src="../images/de-volta.png"
          alt="Voltar"
          class="back-icon"
          onclick="history.back()"
        />
        <h2>Aspectos Sociais da PARJA LDA</h2>
      </header>
      <section>
        <h3>Integração Comunitária</h3>
        <ul>
          <li>
            Parcerias com produtores locais para fortalecer a economia nacional.
          </li>
          <li>Eventos culturais, como música ao vivo.</li>
        </ul>
      </section>
      <section>
        <h3>Inclusão Social</h3>
        <ul>
          <li>Ambiente acessível para pessoas com deficiência.</li>
          <li>Equipa diversificada para promover igualdade e inclusão.</li>
        </ul>
      </section>
      <section>
        <h3>Educação</h3>
        <ul>
          <li>Workshops sobre sustentabilidade e práticas ecológicas.</li>
          <li>Incentivo ao comércio justo.</li>
        </ul>
      </section>
      <section>
        <h3>Saúde e Bem-Estar</h3>
        <ul>
          <li>Menu com opções saudáveis, veganas e orgânicas.</li>
          <li>Espaço projetado para conforto e relaxamento.</li>
        </ul>
      </section>
      <section>
        <h3>Impacto Social Positivo</h3>
        <ul>
          <li>Doações para projetos locais de caridade e sustentabilidade.</li>
          <li>Iniciativas de fidelidade para promover práticas ecológicas.</li>
        </ul>
      </section>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
