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
        <h2>Aspetos Ambientais da PARJA LDA</h2>
      </header>
      <section>
        <h3>Estruturais e de Design</h3>
        <ul>
          <li>Iluminação LED e aproveitamento de luz natural.</li>
          <li>Uso de materiais reciclados para móveis e decoração.</li>
          <li>Isolamento térmico para eficiência energética.</li>
        </ul>
      </section>
      <section>
        <h3>Gestão de Resíduos</h3>
        <ul>
          <li>Sistema de coleta seletiva para reciclagem.</li>
          <li>Compostagem de resíduos orgânicos, como borras de café.</li>
          <li>Redução de descartáveis com utensílios reutilizáveis.</li>
        </ul>
      </section>
      <section>
        <h3>Economia de Recursos</h3>
        <ul>
          <li>Uso de torneiras com sensores para economia de água.</li>
          <li>Sistemas de reaproveitamento de água da chuva.</li>
          <li>
            Aparelhos eficientes, como cafeteiras com selo A de consumo
            energético.
          </li>
        </ul>
      </section>
      <section>
        <h3>Ambiente Verde</h3>
        <ul>
          <li>Plantas naturais no espaço, como samambaias e lírios-da-paz.</li>
          <li>Jardim vertical para purificação do ar.</li>
          <li>Espaços temáticos com elementos sustentáveis.</li>
        </ul>
      </section>
      <section>
        <h3>Produtos Sustentáveis</h3>
        <ul>
          <li>Uso de café orgânico e comércio justo.</li>
          <li>Opções de leites vegetais e alimentos veganos.</li>
          <li>Embalagens biodegradáveis para pedidos para viagem.</li>
        </ul>
      </section>
      <section>
        <h3>Conexão com a Comunidade</h3>
        <ul>
          <li>Parcerias com produtores locais para reduzir emissões.</li>
          <li>
            Eventos de conscientização ambiental, como oficinas de reciclagem.
          </li>
          <li>
            Promoção de ações sustentáveis com descontos para práticas
            ecológicas.
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
