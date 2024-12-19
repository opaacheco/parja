<?php 

include '../config/config.php';

session_start();

include '../db/connectDB.php';
include '../components/menuComponents.php';
include '../components/nav.php';
include '../components/footer.php';

$email = "";
$typePage = "";

echo"<pre>";
print_r($_SESSION["email"]);
echo"</pre>";

$pdo = connectDB();
$sql = "SELECT id, nome, preco, foto_url FROM produtos";
$stmt = $pdo->query($sql);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

// dá get, busca, o id do produto
if (isset($_GET['id'])) {
    $produto_id = $_GET['id'];
} else {
    die("ID não fornecido.");
}

// esta função serve para exibir um produto
function displayOneProduto($pdo, $produto_id) {
    try {
        $stmt = $pdo->prepare("SELECT id, nome, preco, foto_url FROM produtos WHERE id = :id");
        $stmt->bindParam(':id', $produto_id, PDO::PARAM_INT);
        $stmt->execute();
        $row = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($row) {
            echo "<div>";
            echo "<h1>" . htmlspecialchars($row["nome"]) . "</h1>";
            echo "<img src='../" . htmlspecialchars($row["foto_url"]) . "' alt='Imagem do Produto' width='200'/><br>";
            echo "<input type='hidden' name='" . htmlspecialchars($row["preco"]) . "'>";
            echo "<h2>€" . htmlspecialchars($row["preco"]) . "</h2>";
            echo "<button>adicionar</button>";
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
    <link rel="stylesheet" href="../styles/menu.css" />
    <title>Menu</title>
  </head>

  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <div class="main-menu">
        <?= displayOneProduto($pdo, $produto_id)?>    
    </div>    
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
