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
} else {
    die("ID não fornecido.");
}

function displayOneProduto($produto_id) {
    try {
        $singularProduct = srcSingularProdutct($produto_id);
        if ($singularProduct) {
            echo "<div class='produtos-singular'>";
            echo "<h1>" . htmlspecialchars($singularProduct["nome"]) . "</h1>";
            echo "<img src='../" . htmlspecialchars($singularProduct["foto_url"]) . "' alt='Imagem do Produto' width='200'/><br>";
            echo "<input type='hidden' name='" . htmlspecialchars($singularProduct["preco"]) . "'>";
            echo "<p>€" . htmlspecialchars($singularProduct["preco"]) . "</p>";
            if($singularProduct["estoque"]>0){
              echo "<p class='estoque'>disponível</p>";
            }
            echo "<p class='descricao'>" . htmlspecialchars($singularProduct["descricao"]) . "</p>";
            echo "<button><i id='cart-icon' class='material-icons'>add_shopping_cart</i></button>";
            echo "</div>";   
        } else {
            echo "<h2>Produto não encontrado.</h2>";
        }
    } catch (PDOException $e) {
        die("Erro ao buscar produto: " . $e->getMessage());
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
