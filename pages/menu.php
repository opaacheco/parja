<?php 

$servername = "localhost";
$username = "root"; 
$password = "root123";
$dbname = "parja"; 


$email = "";
$typePage = "";

/*
$servername = "sql310.infinityfree.com";
$username = "if0_37797726"; 
$password = "6XXxkI87k6HHkv";
$dbname = "if0_37797726_parjadb"; 
*/

// $conn = mysqli_connect($servername, $username, $password, $dbname);

// if (!$conn) {
//     die("Conexão falhou: " . mysqli_connect_error());
// }

// $sql = "SELECT id, nome, preco, foto_url FROM produtos";
// $result = mysqli_query($conn, $sql);

try {
  $pdo = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Modo de erros
} catch (PDOException $e) {
  die("Erro ao conectar ao banco de dados: " . $e->getMessage());
}

// isto é para consultar para obter produtos
$sql = "SELECT id, nome, preco, foto_url FROM produtos";
$stmt = $pdo->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

function displayNoAuthPage(){
  echo <<<HTML
    <form method='POST' action=''>
      <input type='email' name='email' placeholder='Email' required/>
      <input type='password' name='password' placeholder='Senha' required/>
      <button type='submit'>entrar</button>
    </form>

    <form method='POST' action=''>
      <input type='hidden' name='registar' value='true' />
      <button type='submit'>registar</button>
    </form>
  HTML;
}

function displayRegister(){
  echo <<<HTML
    <form method='POST' action=''>
      <input type='text' name='name' placeholder='Nome' required/>
      <input type='email' name='email' placeholder='Email' required/>
      <input type='password' name='password' placeholder='Senha' required/>
      <button type='submit' name='registarBD'>Registar</button>
    </form>
  HTML;
}

// function displayProdutos($result) {
//   if (mysqli_num_rows($result) > 0) {
//     while ($row = mysqli_fetch_assoc($result)) {
//       $id = $row["id"];
//             $nome = htmlspecialchars($row["nome"]);
//             $fotoUrl = htmlspecialchars($row["foto_url"]);
//             $preco = htmlspecialchars($row["preco"]);

function displayProdutos($result) {
  if (count($result) > 0) {
    foreach ($result as $row) {
      $id = $row["id"];
      $nome = htmlspecialchars($row["nome"]);
      $fotoUrl = htmlspecialchars($row["foto_url"]);
      $preco = htmlspecialchars($row["preco"]);

      echo <<<HTML
        <div class='produto' onclick="window.location.href='detalhes_produto.php?id=$id'">
          <h1>$nome</h1>
          <img src='../$fotoUrl' alt='Imagem do Produto' width='200'/><br>
          <input type='hidden' name='$id'>
          <h2>€$preco</h2>
          <button>adicionar</button>
        </div>
      HTML;
    }
  } else {
      echo "<h1>Nenhum resultado encontrado.</h1>";
  }
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['registarBD'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password']; 

  // $stmt = mysqli_prepare($conn, "SELECT id, email, senha FROM usuarios WHERE email = ?");
  // mysqli_stmt_bind_param($stmt, "s", $email);
  // mysqli_stmt_execute($stmt);
  // $resultatoUser = mysqli_stmt_get_result($stmt);

 // if (mysqli_num_rows($resultatoUser) > 0) {
  //   header("Location: menu.php");
  //   exit;
  // }

//  $stmt = mysqli_prepare($conn, "INSERT INTO usuarios (nome, email, senha, tipo_usuario) VALUES (?, ?, ?, ?)");
//   $tipo_usuario = 'usuario'; 
//   mysqli_stmt_bind_param($stmt, "ssss", $name, $email, $password, $tipo_usuario);
//   mysqli_stmt_execute($stmt);
// }

// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   if (isset($_POST['registar'])) {
//       $typePage = 'register';
//   } elseif (isset($_POST['email'])) {
//       $email = $_POST['email'];
//       $stmt = mysqli_prepare($conn, "SELECT id, email, senha FROM usuarios WHERE email = ?");
//       mysqli_stmt_bind_param($stmt, "s", $email);
//       mysqli_stmt_execute($stmt);
//       $resultatoUser = mysqli_stmt_get_result($stmt);
//       if (mysqli_num_rows($resultatoUser) > 0) {
//         $typePage = 'produtos';
//       } else {
//         header("Location: menu.php");
//         exit;
//       }
//   }
// }

// vê se o uzuário já existe
  $stmt = $pdo->prepare("SELECT id, email, senha FROM usuarios WHERE email = :email");
  $stmt->bindParam(':email', $email);
  $stmt->execute();
  $resultatoUser = $stmt->fetch(PDO::FETCH_ASSOC);

  if ($resultatoUser) {
    header("Location: menu.php");
    exit;
  }

  // insere um novo usuario
  $stmt = $pdo->prepare("INSERT INTO usuarios (nome, email, senha, tipo_usuario) VALUES (:nome, :email, :senha, :tipo_usuario)");
  $tipo_usuario = 'usuario';
  $stmt->bindParam(':nome', $name);
  $stmt->bindParam(':email', $email);
  $stmt->bindParam(':senha', $password);
  $stmt->bindParam(':tipo_usuario', $tipo_usuario);
  $stmt->execute();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  if (isset($_POST['registar'])) {
    $typePage = 'register';
  } elseif (isset($_POST['email'])) {
    $email = $_POST['email'];
    $stmt = $pdo->prepare("SELECT id, email, senha FROM usuarios WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $resultatoUser = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($resultatoUser) {
      $typePage = 'produtos';
    } else {
      header("Location: menu.php");
      exit;
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
                <a href="./topicoSete.html">Tópico 7</a>
              </li>
              <li>
                <a href="./topicoOito.html">Tópico 8</a>
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
