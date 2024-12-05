php<!DOCTYPE html>
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
              <li class="show-movel"><a href="">home</a></li>
              <li class="show-movel">
                <a href="./sobre-nos.php">Sobre Nós</a>
              </li>
              <li class="show-movel"><a href="./menu.php">Menu</a></li>
              <li class="show-movel"><a href="./playlist.php">Playlist</a></li>
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
      <div class="hero">
        <h1 id="hum">Bem-Vindo!</h1>
        <p id="p">Venha desfrutar da melhor experiência de café da cidade.</p>
        <button id="btn"><a href="./sobre-nos.html">Sobre nós</a></button>
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
