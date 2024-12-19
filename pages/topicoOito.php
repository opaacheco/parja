<?php

include '../config/config.php';

session_start();

include '../components/menuComponents.php';
include '../components/nav.php';
include '../components/footer.php';

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
    <link rel="stylesheet" href="../styles/topicoCinco.css" />
    <title>Tópico 8</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main class="main-conteudo">
        <header>
            <h2>Gestão da Cadeia de Suprimentos (SCM)</h2>
        </header>
        <section>
            <h3>Como a Parja Atua com o SCM</h3>
            <ul>
                <li>Parcerias com produtores locais para aquisição de café e alimentos frescos.</li>
                <li>Estoque controlado com base em demanda sazonal e eventos.</li>
                <li>Automatização do controle de inventário para evitar desperdícios.</li>
            </ul>
        </section>
        <section>
            <h3>Otimização da Cadeia de Suprimentos</h3>
            <ul>
                <li><strong>Fornecedores:</strong> Preferência por produtos orgânicos e de comércio justo.</li>
                <li><strong>Logística:</strong> Redução de transporte para diminuir emissões de carbono.</li>
                <li><strong>Processos:</strong> Planejamento semanal para evitar faltas e excessos.</li>
            </ul>
        </section>
        <section>
            <h3>Benefícios da Otimização</h3>
            <ul>
                <li>Redução de custos operacionais.</li>
                <li>Aumento da qualidade dos produtos servidos.</li>
                <li>Contribuição para práticas mais sustentáveis.</li>
            </ul>
        </section>
        <section>
            <h3>Sustentabilidade na Cadeia de Suprimentos</h3>
            <ul>
                <li>Uso de embalagens biodegradáveis e compostáveis.</li>
                <li>Compra de ingredientes em quantidades ideais para minimizar desperdícios.</li>
                <li>Educação dos fornecedores sobre práticas de cultivo sustentável.</li>
            </ul>
        </section>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
