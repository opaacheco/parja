<?php 

include '../config/config.php';

session_start();

include '../db/connectDB.php';
include '../db/querys.php';
include '../components/menuComponents.php';
include '../components/nav.php';
include '../components/footer.php';

$email = "";
$typePage = "";

$pdo = connectDB();
$sql = "SELECT id, nome, preco, foto_url FROM produtos";
$stmt = $pdo->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];
} elseif (isset($_GET['produtoid'])){
  $produto_id = $_GET['produtoid'];
    // Aqui você pode fazer o que for necessário com o produto_id, por exemplo, adicionar ao carrinho
    if (!isset($_SESSION['carrinho'][$produto_id])) {
        $_SESSION['carrinho'][$produto_id] = 1; // Adiciona o produto ao carrinho com quantidade 1
    } else {
        $_SESSION['carrinho'][$produto_id] += 1; // Incrementa a quantidade se já existir no carrinho
    }
    
    // Aqui pode adicionar código para retornar uma resposta ao usuário ou apenas redirecionar.
    echo "Produto ID $produto_id adicionado ao carrinho.";
}
else {
    die("ID não fornecido.");
}


// function displayOneProduto($produto_id) {
//     try {
//         $singularProduct = srcSingularProdutct($produto_id);
//         if ($singularProduct) {
//             echo "<div class='produtos-singular'>";
//             echo "<h1>" . htmlspecialchars($singularProduct["nome"]) . "</h1>";
//             echo "<img src='../" . htmlspecialchars($singularProduct["foto_url"]) . "' alt='Imagem do Produto' width='200'/><br>";
//             echo "<input type='hidden' name='" . htmlspecialchars($singularProduct["preco"]) . "'>";
//             echo "<p>€" . htmlspecialchars($singularProduct["preco"]) . "</p>";
//             if($singularProduct["estoque"]>0){
//               echo "<p class='estoque'>disponível</p>";
//             }
//             echo "<p class='descricao'>" . htmlspecialchars($singularProduct["descricao"]) . "</p>";
//             echo "<button><i id='cart-icon' class='material-icons'>add_shopping_cart</i></button>";
//             echo "</div>";   
//         } else {
//             echo "<h2>Produto não encontrado.</h2>";
//         }
//     } catch (PDOException $e) {
//         die("Erro ao buscar produto: " . $e->getMessage());
//     }
// }

function displayOneProduto($produto_id) {
      $singularProduct = srcSingularProdutct($produto_id);
      if ($singularProduct) {
          echo "<form method='GET' action=''>";
          echo "<div class='produtos-singular'>";
          echo "<h1>" . htmlspecialchars($singularProduct["nome"]) . "</h1>";
          echo "<img src='../" . htmlspecialchars($singularProduct["foto_url"]) . "' alt='Imagem do Produto' width='200'/><br>";
          echo "<p>€" . htmlspecialchars($singularProduct["preco"]) . "</p>";

          if ($singularProduct["estoque"] > 0) {
              echo "<p class='estoque'>Disponível</p>";
          } else {
              echo "<p class='estoque indisponivel'>Indisponível</p>";
          }

          echo "<p class='descricao'>" . htmlspecialchars($singularProduct["descricao"]) . "</p>";
          echo "<input type='hidden' name='produtoid' value='" . htmlspecialchars($singularProduct["id"]) . "'>";
          // Botão com AJAX para adicionar ao carrinho
          echo "<button class='add-to-cart' type='submit'>";
          echo "<i id='cart-icon' class='material-icons'>add_shopping_cart</i>";
          echo "</button>";

          echo "</div>";
          echo "</form>";
      } else {
          echo "<h2>Produto não encontrado.</h2>";
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
    <link rel="stylesheet" href="../styles/detalhes.css" />
    <title>Menu</title>
  </head>

  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <div class="main-menu">
        <?= displayOneProduto($produto_id)?>    
    </div>    
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>

  </body>
</html>
