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
    <link rel="stylesheet" href="../styles/ambEcoSoc.css" />
    <title>Aspetos Ambientais</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main class="main-body">
      <header>
        <img
          src="../images/de-volta.png"
          alt="Voltar"
          class="back-icon"
          onclick="history.back()"
        />
        <h2>Viabilidade Econômica da PARJA LDA</h2>
      </header>
      <section>
        <h3>Análise de Custos</h3>
        <ul>
          <li>
            Investimento inicial estimado em <strong>60.000 €</strong>,
            incluindo infraestrutura e equipamentos.
          </li>
          <li>
            Custos operacionais mensais de aproximadamente
            <strong>3.000 €</strong>.
          </li>
          <li>
            Parcerias com fornecedores locais para redução de custos logísticos.
          </li>
        </ul>
      </section>
      <section>
        <h3>Receitas Previstas</h3>
        <ul>
          <li>Previsão de 100 clientes por dia nos primeiros 6 meses.</li>
          <li>Aumento gradual da clientela em 20% ao ano.</li>
        </ul>
      </section>
      <section>
        <h3>Margem de Lucro</h3>
        <ul>
          <li>
            Margem de lucro projetada em <strong>30%</strong> sobre os produtos.
          </li>
          <li>Produtos premium (cafés especiais e sobremesas).</li>
        </ul>
      </section>
      <section>
        <h3>Perspetivas de Crescimento</h3>
        <ul>
          <li>Expansão para novas zonas após 2 anos de operação.</li>
          <li>Oferta de cursos e workshops para gerar receita adicional.</li>
        </ul>
      </section>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
