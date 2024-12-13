<?php 

session_start();

include '../components/menuComponents.php';
include '../db/connectDB.php';
include '../db/querys.php';

$email = "";
$typePage = "";

$_SESSION["erros"]= "";

$result = buscarProdutos();


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registarBD'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password']; 

  $hashPass = password_hash($password,  PASSWORD_DEFAULT);
  // vê se o uzuário já existe
  $resultatoUser = buscarUsers($email);
  if ($resultatoUser) {
    header("Location: menu.php");
    exit;
  }
  // insere um novo usuario
  inserirUser($name, $email, $hashPass, $tipo_usuario);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['registar'])) {
    $_SESSION["erros"] = "password incorreta";
    $typePage = 'register';
  } elseif (isset($_POST['email'])) {
    $email = $_POST['email'];
    $_SESSION["email"] = $email;
    $password = $_POST['password'];
    $resultatoUser = buscarUsers($email);
    if ($resultatoUser) {
      $_SESSION['emailUser'] = $email;
      if(password_verify($password, $resultatoUser['senha'])){
        $_SESSION['emailUser'] = $email;
        $typePage = 'produtos';
        $_SESSION["erros"] = "";
      }else{
        $_SESSION["erros"] = "password incorreta";
      }
    } else {
      $_SESSION["erros"] = "password incorreta";
    }
  }
}

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
    <link rel="stylesheet" href="../styles/menu.css" />
    <title>Menu</title>
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
            <li><a href="">Menu</a></li>
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
              <li class="show-movel"><a href="/home.php">home</a></li>
              <li class="show-movel">
                <a href="./sobre-nos.php">Sobre Nós</a>
              </li>
              <li class="show-movel"><a href="../pages/menu.php">Menu</a></li>
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
    <div class="main-menu">
      <div class="produtos">
        <?php 
        displayMenu($typePage, $result);
        ?>
      </div>
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
