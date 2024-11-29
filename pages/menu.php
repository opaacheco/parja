<?php 

$servername = "localhost";
$username = "root"; 
$password = "root";
$dbname = "lolja"; 

$email = "";
$typePage = "";

/*
$servername = "sql310.infinityfree.com";
$username = "if0_37797726"; 
$password = "6XXxkI87k6HHkv";
$dbname = "if0_37797726_parjadb"; 
*/

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$sql = "SELECT id, nome, preco, foto_url FROM produtos";
$result = mysqli_query($conn, $sql);

function displayNoAuthPage(){
  echo "<form method='POST' action=''>";
  echo "<input type='email' name='email' placeholder='Email' required/>";
  echo "<input type='password' name='password' placeholder='Senha' required/>";
  echo "<button type='submit'>entrar</button>";
  echo "</form>";

  echo "<form method='POST' action=''>";
  echo "<input type='hidden' name='registar' value='true' />";
  echo "<button type='submit'>registar</button>";
  echo "</form>";
}

function displayRegister(){
  echo "<form method='POST' action=''>";
  echo "<input type='text' name='name' placeholder='Nome' required/>";
  echo "<input type='email' name='email' placeholder='Email' required/>";
  echo "<input type='password' name='password' placeholder='Senha' required/>";
  echo "<button type='submit' name='registarBD'>Registar</button>";
  echo "</form>";
}

function displayProdutos($result) {
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo "<div>";
      echo "<h1>" . $row["nome"] . "</h1>";
      echo "<img src='../".$row["foto_url"]."' alt='Imagem do Produto' width='200'/><br>";
      echo "<h2>€" . $row["preco"]."</h2>";
      echo "<button>adicionar</button>";
      echo "</div>";
    }
  } else {
      echo "<h1>Nenhum resultado encontrado.</h1>";
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registarBD'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password']; 

  $stmt = mysqli_prepare($conn, "SELECT id, email, senha FROM usuarios WHERE email = ?");
  mysqli_stmt_bind_param($stmt, "s", $email);
  mysqli_stmt_execute($stmt);
  $resultatoUser = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($resultatoUser) > 0) {
    header("Location: menu.php");
    exit;
  }

  $stmt = mysqli_prepare($conn, "INSERT INTO usuarios (nome, email, senha, tipo_usuario) VALUES (?, ?, ?, ?)");
  $tipo_usuario = 'usuario'; 
  mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $tipo_usuario);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['registar'])) {
      $typePage = 'register';
  } elseif (isset($_POST['email'])) {
      $email = $_POST['email'];

      $stmt = mysqli_prepare($conn, "SELECT id, email, senha FROM usuarios WHERE email = ?");
      mysqli_stmt_bind_param($stmt, "s", $email);
      mysqli_stmt_execute($stmt);
      $resultatoUser = mysqli_stmt_get_result($stmt);

      if (mysqli_num_rows($resultatoUser) > 0) {
      } else {
        header("Location: menu.php");
        exit;
      }
      $typePage = 'produtos';
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
    <div class="main-menu">
      <div class="produtos">
        <?php 
        
        if($typePage === 'register'){
          echo "<div class='formContainer'>";
          echo "<h1>REGISTRAR</h1>";
          displayRegister();
          echo "</div>";
        } elseif($typePage === 'produtos'){
          displayProdutos($result);
        } else {
          echo "<div class='formContainer'>";
          echo "<h1>LOGIN</h1>";
          displayNoAuthPage();
          echo "</div>";
        }
        
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
