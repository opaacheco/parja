<?php 

function navBar($emailAuxiliar){
    echo <<<HTML
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
    HTML;

    displayLogoutLogin($emailAuxiliar);

    echo <<<HTML
        </div>
        <div class="menu-obscuro">
          <i onclick="comutarMenu()" id="hamburguer" class="material-icons">menu</i>
          <div id="menu-hidde">
            <ul class="nav-hidde">
              <li class="show-movel"><a href="./home.php">home</a></li>
              <li class="show-movel"><a href="./sobre-nos.php">Sobre Nós</a></li>
              <li class="show-movel"><a href="./menu.php">Menu</a></li>
              <li class="show-movel"><a href="./playlist.php">Playlist</a></li>
              <li><a href="./topicoUm.php">Tópico 1</a></li>
              <li><a href="./topicoDois.php">Tópico 2</a></li>
              <li><a href="./topicoTres.php">Tópico 3</a></li>
              <li><a href="./topicoQuatro.php">Tópico 4</a></li>
              <li><a href="./topicoCinco.php">Tópico 5</a></li>
              <li><a href="./topicoSeis.php">Tópico 6</a></li>
              <li><a href="./topicoSete.php">Tópico 7</a></li>
              <li><a href="./topicoOito.php">Tópico 8</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    HTML;
}
?>
