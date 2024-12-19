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
    <link rel="stylesheet" href="../styles/topicoTres.css" />
    <title>Tópico 2</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main class="main-conteudo">
      <section class="introducao">
        <h2>Plano de Implementação de ERP para PARJA LDA</h2>
        <p>
          Este projeto visa integrar um ERP na empresa PARJA para otimizar
          processos, melhorar a gestão e aumentar a eficiência operacional.
        </p>
      </section>

      <section class="analise-erps">
        <h3>Análise de ERPs no Mercado</h3>
        <ul>
          <li>
            <strong>Odoo:</strong>
            Flexível, modular, e com um custo acessível.
          </li>
          <li>
            <strong>SAP Business One:</strong>
            Estável e avançado, mas com custo elevado.
          </li>
          <li>
            <strong>PHC:</strong>
            Boa localização para o mercado português, mas interface pouco
            amigável.
          </li>
          <li>
            <strong>Primavera BSS:</strong>
            Simples e adaptado a PMEs portuguesas, mas personalização limitada.
          </li>
        </ul>
      </section>

      <section class="escolha-erp">
        <h3>ERP Escolhido: Odoo</h3>
        <p>
          O Odoo foi escolhido devido à sua flexibilidade, custo-benefício, e
          vasta gama de módulos adequados para pequenas e médias empresas.
        </p>
      </section>

      <section class="modulos">
        <h3>Módulos Necessários</h3>
        <ul>
          <li>
            <strong>Faturação:</strong>
            Automação de pagamentos e gestão de contas a receber.
          </li>
          <li>
            <strong>Contabilidade:</strong>
            Gestão de transações e relatórios fiscais.
          </li>
          <li>
            <strong>Recursos Humanos:</strong>
            Gestão de horários, salários e dados de colaboradores.
          </li>
          <li>
            <strong>CRM:</strong>
            Gestão de relacionamento com clientes e programas de fidelidade.
          </li>
        </ul>
      </section>

      <section class="cronograma">
        <h3>Cronograma de Implementação</h3>
        <p>
          O cronograma de implementação está estruturado em fases, com etapas
          específicas e reuniões agendadas para garantir a integração do ERP:
        </p>
        <ul>
          <li>
            <strong>Planeamento Inicial:</strong>
            Definição dos requisitos do ERP (Semana 1).
          </li>
          <li>
            <strong>Configuração e Personalização:</strong>
            Adaptação do sistema aos módulos necessários (Semanas 2-3).
          </li>
          <li>
            <strong>Treinamento dos Utilizadores:</strong>
            Formação das equipes para utilização dos módulos (Semanas 4-5).
          </li>
          <li>
            <strong>Go-live:</strong>
            Implementação final e suporte técnico (Semana 8).
          </li>
        </ul>
      </section>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
