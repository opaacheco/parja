<?php
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
    <link rel="stylesheet" href="../styles/topicoUm.css" />
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
                <a
                  href="../pages/playlist.php
                "
                  >Playlist</a
                >
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
    <div class="main-container">
      <main class="main-topicoUm">
        <div>
          <p>
            <br />
            <li><b>Nome da Empresa</b> - PARJA LDA</li>
            <br />
            <li>
            <b>Logo</b> - Foi discutido a ideia de usar um animal como logo e
              acabamos por escolher um pinguim com chapéu e óculos para dar a
              ideia mais formal.
            </li>
            <br />
            <li>
            <b>Sócios</b> - Artiom Gusanu (33,33%), Pedro Pacheco (33,33%) e João
              Marques (33,33%)
            </li>
            <br />
            <li><b> Tipo de Organização</b> - Privada com fins lucrativos.</li>
            <br />
            <li><b>Capital Social</b> - 60.000€</li>
            <br />
            <li>
            <b>CAE</b> - 56301 (Exploração de Cafés) - Este é devido á empresa ser
              muito á volta da venda de café
            </li>
            <br />
            <li><b>NiF</b> - 546727530</li>
          </p>
          <div class="explicacaoEmpresa">
            <br />
            <br />
            O capital social da empresa ficou num total de 60.000€ da forma que
            todos os sócios, Artiom, Pedro e João, contribuissem com uma parte
            igual para este, acabando por utilizar esse dinheiro como forma de
            promover a confiança externa na empresa e trazer uma certa segurança
            para potenciais investidores.
            <br />
            <br />
            Tornando assim PARJA em uma sociedade por quotas limitada ao capital
            social.
          </div>
        </div>
      </main>
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
