<?php
session_start();
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
    <link rel="stylesheet" href="../styles/sobre-nos.css" />
    <link rel="stylesheet" href="../styles/footer.css" />
    <title>sobre nós</title>
  </head>
  <body>
    <header>
      <div class="logo-slogan">
        <img src="../images/logo.png" width="150" height="150" alt="" />
        <h1 class="titulo">PARJA</h1>
        <p>o som que atrai e o sabor que conquista</p>
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
    <main class="main-sobre-nos">
      <div>
        <img src="../images/bartender.jfif" alt="" />
        <p>
          Somos um trio de amigos que gosta de café e de passar o tempo a ouvir
          um bom jazz. Por isso, decidimos explorar esta ideia unindo ambos os
          conceitos de "café" e "Jazz". Assim, foi com isso em mente que criámos
          "PARJA", para mostrar às pessoas que esta combinação era o que faltava
          no seu dia a dia. Com um som envolvente, e um café especial que
          convida, tornámos o nosso espaço num local acolhedor para todos,
          fazendo um convite súbtil para que se juntem a nós e que desfrutem de
          momentos memoráveis em boa companhia.
        </p>
        <p>
          <!-- Somos um trio de amigos que adora café e gosta de passar o tempo a
          ouvir jazz. Decidimos materializar esta ideia para mostrar às pessoas
          que esta combinação é perfeita para o seu dia a dia. Com um som
          envolvente no nosso ambiente, o sabor do nosso café especial convida
          todos a juntarem-se a nós e a desfrutarem de momentos memoráveis em
          boa companhia.
        </p>
        <p>
          Somos um trio de amigos que adora café e gosta de passar o tempo a
          ouvir jazz. Decidimos materializar esta ideia para mostrar às pessoas
          que esta combinação é perfeita para o seu dia a dia. Com um som
          envolvente no nosso ambiente, o sabor do nosso café especial convida
          todos a juntarem-se a nós e a desfrutarem de momentos memoráveis em
          boa companhia. -->
          <br />
          Sócios - Artiom Gusanu, Pedro Pacheco e João Marques
          <br />
          <br />
          NiF - 546727530
          <br />
          <br />
          <!-- Tipo de Empresa - privada com fins lucrativos -->
          Empresa do tipo privada com fins lucrativos
          <br />
          <br />
          CAE - 56301 (Exploração de Cafés)
        </p>
      </div>
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
