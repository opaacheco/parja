<?php

include '../config/config.php';

session_start();

include '../components/menuComponents.php';
include '../components/nav.php';
include '../db/connectDB.php';
include '../db/querys.php';
include '../components/footer.php';

$emailAuxiliar = isset($_SESSION['emailUser']) ? $_SESSION['emailUser'] : '';

// Função para remover item do carrinho
if (isset($_GET['remover'])) {
  $idProdutoRemover = $_GET['remover'];
  unset($carrinho[$idProdutoRemover]);
  header("Location: " . $_SERVER['PHP_SELF']); // Redireciona para a mesma página
  exit();
}




function displayCarrinho(){
  $total = 0;
  $carrinho =  $_SESSION['carrinho'];
   if (count($carrinho) > 0){
      foreach ($carrinho as $produto){
        $singularProduct = srcSingularProdutct($produto);
            echo "<p>". htmlspecialchars($singularProduct['nome'])."</p>"; 
            echo "<p>€ ". number_format($singularProduct['preco'], 2, ',', '.')."</p>"; 
            echo "<button>Remover</button>";
            echo "</tbody>";
            echo"</table>";
            $total += $singularProduct['preco'];
            echo"<div class='total'><h3>Total: €". number_format($total, 2, ',', '.') ."</h3></div>";
      }     
   }else{
    echo "<p>Seu carrinho está vazio!</p>";
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
    <link rel="stylesheet" href="../styles/ambEcoSoc.css" />
    <title>Aspetos Ambientais</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar);
    ?>
    <main class="main-body">
        <h1>Carrinho de Compras</h1>
    <?php 
      displayCarrinho();
    ?>
    </main>
    <?php 
      footerBar();
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>

