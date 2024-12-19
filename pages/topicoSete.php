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
    <title>Tópico 7</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main class="main-conteudo">
        <header>
            <h2>Gestão de Relacionamento com o Cliente (CRM)</h2>
        </header>
        <section>
            <h3>O que é um CRM?</h3>
            <ul>
                <li>Um sistema para gerenciar interações com clientes e potenciais clientes.</li>
                <li>Ajuda a organizar informações, automatizar processos e melhorar o atendimento.</li>
            </ul>
        </section>
        <section>
            <h3>CRM Utilizado: Odoo</h3>
            <ul>
                <li>Plataforma integrada que oferece módulos de vendas, marketing e atendimento.</li>
                <li>Facilidade de uso e personalização para pequenas empresas como a PARJA.</li>
                <li>Centralização dos dados dos clientes para decisões mais estratégicas.</li>
            </ul>
        </section>
        <section>
            <h3>Benefícios para a Parja Cafetaria</h3>
            <ul>
                <li><strong>Melhoria no atendimento:</strong> Histórico de interações e preferências dos clientes.</li>
                <li><strong>Campanhas personalizadas:</strong> Promoções baseadas nos hábitos de consumo.</li>
                <li><strong>Fidelização:</strong> Programa de recompensas gerenciado pelo CRM.</li>
            </ul>
        </section>
        <section>
            <h3>Forma de Atuação com o CRM</h3>
            <ul>
                <li>Envio de newsletters com eventos e promoções semanais.</li>
                <li>Segmentação de clientes por perfil (turistas, locais, vegans, etc.).</li>
                <li>Análise de feedbacks para melhorias no cardápio e ambiente.</li>
            </ul>
        </section>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
