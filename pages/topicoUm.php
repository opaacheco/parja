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
    <link rel="stylesheet" href="../styles/topicoUm.css" />
    <title>Tópico 1</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <div class="main-container">
      <main class="main-topicoUm">
        <div>
          <p>
            <br />
            <li><b>Nome da Empresa</b> - PARJA LDA</li>
            <br />
            <li>
            <b>Logo</b> - Foi discutido a ideia de usar um animal como logo e
              acabamos por escolher um pinguim com chapéu e óculos para dar a
              ideia mais formal.
            </li>
            <br />
            <li>
            <b>Sócios</b> - Artiom Gusanu (33,33%), Pedro Pacheco (33,33%) e João
              Marques (33,33%)
            </li>
            <br />
            <li><b> Tipo de Organização</b> - Privada com fins lucrativos.</li>
            <br />
            <li><b>Capital Social</b> - 60.000€</li>
            <br />
            <li>
            <b>CAE</b> - 56301 (Exploração de Cafés) - Este é devido á empresa ser
              muito á volta da venda de café
            </li>
            <br />
            <li><b>NiF</b> - 546727530</li>
          </p>
          <div class="explicacaoEmpresa">
            <br />
            <br />
            O capital social da empresa ficou num total de 60.000€ da forma que
            todos os sócios, Artiom, Pedro e João, contribuissem com uma parte
            igual para este, acabando por utilizar esse dinheiro como forma de
            promover a confiança externa na empresa e trazer uma certa segurança
            para potenciais investidores.
            <br />
            <br />
            Tornando assim PARJA em uma sociedade por quotas limitada ao capital
            social.
          </div>
        </div>
      </main>
    </div>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
