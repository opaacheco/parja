<?php 

include '../config/config.php';

session_start();

include '../components/menuComponents.php';
include '../components/nav.php';
include '../db/connectDB.php';
include '../db/querys.php';
include '../components/footer.php';

$email = "";
$typePage = "";

$_SESSION["erros"]= "";

$result = buscarProdutos();


if (isset($_GET['logout'])) {
  $_SESSION['emailUser'] = '';
}

if (isset($_GET['registarBD'])) {
  $name = isset($_GET['name']) ? $_GET['name'] : '';
  $email = isset($_GET['email']) ? $_GET['email'] : '';
  $password = isset($_GET['password']) ? $_GET['password'] : ''; 

  $hashPass = password_hash($password,  PASSWORD_DEFAULT);
  // vê se o uzuário já existe
  $resultatoUser = buscarUsers($email);
  if ($resultatoUser) {
    header("Location: menu.php");
    exit;
  }
  // insere um novo usuario
  inserirUser($name, $email, $hashPass);
}

if (isset($_GET['registar'])) {
  $_SESSION["erros"] = "password incorreta";
  $typePage = 'register';
} elseif (isset($_GET['login'])) {
  $email = isset($_GET['email']) ? $_GET['email'] : '';
  $_SESSION["email"] = $email;
  $password = isset($_GET['password']) ? $_GET['password'] : '';
  $resultatoUser = buscarUsers($email);
  if ($resultatoUser) {
    if(password_verify($password, $resultatoUser['senha'])){
      $_SESSION['emailUser'] = $email;
      $_SESSION['email'] = $email;
      $typePage = 'produtos';
      $_SESSION["erros"] = "";
    }else{
      $_SESSION["erros"] = "password incorreta";
    }
  } else {
    $_SESSION["erros"] = "password incorreta";
  }
}

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
    <link rel="stylesheet" href="../styles/menu.css" />
    <title>Menu</title>
  </head>

  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <div class="main-menu">
      <div class="produtos">
        <?php 
        $emailAuxiliar = isset($_SESSION['emailUser']) ? $_SESSION['emailUser'] : '';
        displayMenu($typePage, $result, $emailAuxiliar);
        ?>
      </div>
    </div>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>