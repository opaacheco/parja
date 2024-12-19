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
    <link rel="stylesheet" href="../styles/topicoCinco.css" />
    <title>Tópico 5</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main>
      <header>
        <h2>Comunicação com o Exterior da PARJA LDA</h2>
      </header>

      <section>
        <h3>Marketing Digital</h3>
        <ul>
          <li>
            Campanhas visuais que conectam o charme da cafetaria à cultura
            lisboeta.
          </li>
          <li>
            Anúncios segmentados para turistas e locais, promovendo a
            experiência única de Lisboa.
          </li>
          <li>Promoções temáticas sazonais (ex.: verão em Lisboa).</li>
        </ul>
      </section>
      <section>
        <h3>Engajamento com o Público</h3>
        <ul>
          <li>
            Promoções exclusivas para turistas que visitam o centro histórico.
          </li>
          <li>
            Concursos temáticos, como fotografias com a hashtag da cafetaria em
            Lisboa.
          </li>
          <li>
            Interação ativa nas redes sociais com dicas sobre eventos e atrações
            locais.
          </li>
        </ul>
      </section>
      <section>
        <h3>Divulgação em Eventos</h3>
        <ul>
          <li>
            Participação em feiras culturais e gastronômicas no centro de
            Lisboa.
          </li>
          <li>
            Organização de noites temáticas com jazz e degustações de produtos
            típicos.
          </li>
          <li>
            Parcerias com guias turísticos para incluir a cafetaria nos
            roteiros.
          </li>
        </ul>
      </section>
      <section>
        <h3>Identidade Visual e Branding</h3>
        <ul>
          <li>
            Incorporação de elementos visuais lisboetas, como azulejos e
            referências à história local.
          </li>
          <li>
            Embalagens personalizadas que destacam o charme e a autenticidade
            portuguesa.
          </li>
          <li>Foco na sustentabilidade e na valorização da cultura local.</li>
        </ul>
      </section>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
