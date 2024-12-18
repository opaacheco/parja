<?php

include '../config/config.php';

session_start();

include '../components/menuComponents.php';

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
    <header>
      <div class="logo-slogan">
        <img src="../images/logo.png" alt="" />
        <h1 class="titulo">PARJA</h1>
        <p class="frase">o som que atrai e o sabor que conquista</p>
      </div>

      <div class="opcoes">
        <nav>
          <ul>
            <li><a href="./home.php">home</a></li>
            <li><a href="./sobre-nos.php">Sobre Nós</a></li>
            <li><a href="./menu.php">Menu</a></li>
            <li><a href="./playlist.php">Playlist</a></li>
          </ul>
          <div class="linha"></div>
        </nav>
        <div class="profile-container">
        <?php
          $emailAuxiliar = isset($_SESSION['emailUser']) ? $_SESSION['emailUser'] : '';
          displayLogoutLogin($emailAuxiliar);
        ?>
      </div>
        <div class="menu-obscuro">
          <i onclick="comutarMenu()" id="hamburguer" class="material-icons"
            >menu</i
          >
          <div id="menu-hidde">
            <ul class="nav-hidde">
              <li class="show-movel"><a href="./home.php">home</a></li>
              <li class="show-movel">
                <a href="./sobre-nos.php">Sobre Nós</a>
              </li>
              <li class="show-movel"><a href="./menu.php">Menu</a></li>
              <li class="show-movel">
                <a href="./playlist.php">Playlist</a>
              </li>
              <li>
                <a href="./topicoUm.php">Tópico 1</a>
              </li>
              <li>
                <a href="./topicoDois.php">Tópico 2</a>
              </li>
              <li>
                <a href="./topicoTres.php">Tópico 3</a>
              </li>
              <li>
                <a href="./topicoQuatro.php">Tópico 4</a>
              </li>
              <li>
                <a href="./topicoCinco.php">Tópico 5</a>
              </li>
              <li>
                <a href="./topicoSeis.php">Tópico 6</a>
              </li>
              <li>
                <a href="./topicoSete.php">Tópico 7</a>
              </li>
              <li>
                <a href="./topicoOito.php">Tópico 8</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
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

    <footer>
      <div class="contatos">
        <ul>
          <li>Telefone - 912902536</li>
          <li>E-mail - parja.international@gmail.com</li>
          <li>Localização - Rua Augusta n° 22</li>
        </ul>
      </div>
      <div class="contatos">
        <ul>
          <li class="redes-sociais">
            <a href=""><img src="../images/facebook.png" alt="" /></a>
          </li>
          <li class="redes-sociais">
            <a href=""><img src="../images/instagram.png" alt="" /></a>
          </li>
          <li class="redes-sociais">
            <a href=""><img src="../images/twitter.png" alt="" /></a>
          </li>
        </ul>
      </div>
      <p>© todos direitos reservados ©</p>
    </footer>
    <script src="../script/main.js"></script>
  </body>
</html>
