<?php 

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
    <link rel="stylesheet" href="../styles/playlist.css" />
    <title>Tópico 1</title>
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
            <li><a href="./home.html">home</a></li>
            <li><a href="./sobre-nos.html">Sobre Nós</a></li>
            <li><a href="">Menu</a></li>
            <li><a href="./playlist.html">Playlist</a></li>
          </ul>
          <div class="linha"></div>
        </nav>
        <div class="menu-obscuro">
          <i onclick="comutarMenu()" id="hamburguer" class="material-icons"
            >menu</i
          >
          <div id="menu-hidde">
            <ul class="nav-hidde">
              <li class="show-movel"><a href="/home.html">home</a></li>
              <li class="show-movel">
                <a href="./sobre-nos.html">Sobre Nós</a>
              </li>
              <li class="show-movel"><a href="../pages/menu.html">Menu</a></li>
              <li class="show-movel">
                <a href="./playlist.html">Playlist</a>
              </li>
              <li>
                <a href="./topicoUm.html">Tópico 1</a>
              </li>
              <li>
                <a href="./topicoDois.html">Tópico 2</a>
              </li>
              <li>
                <a href="./topicoTres.html">Tópico 3</a>
              </li>
              <li>
                <a href="./topicoQuatro.html">Tópico 4</a>
              </li>
              <li>
                <a href="./topicoCinco.html">Tópico 5</a>
              </li>
              <li>
                <a href="./topicoSeis.html">Tópico 6</a>
              </li>
              <li>
                <a href="">Tópico 7</a>
              </li>
              <li>
                <a href="">Tópico 8</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <div class="spotify-container"></div>
    <div class="main-menu">
      <h1>menu</h1>
    </div>
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