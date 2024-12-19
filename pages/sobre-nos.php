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
    <link rel="stylesheet" href="../styles/sobre-nos.css" />
    <link rel="stylesheet" href="../styles/footer.css" />
    <title>sobre nós</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main class="main-sobre-nos">
      <div>
        <p>
          Somos um trio de amigos que gosta de café e de passar o tempo a ouvir
          um bom jazz. Por isso, decidimos explorar esta ideia unindo ambos os
          conceitos de "café" e "Jazz". Assim, foi com isso em mente que criámos
          "PARJA", para mostrar às pessoas que esta combinação era o que faltava
          no seu dia a dia. Com um som envolvente, e um café especial que
          convida, tornámos o nosso espaço num local acolhedor para todos,
          fazendo um convite súbtil para que se juntem a nós e que desfrutem de
          momentos memoráveis em boa companhia.
        </p>
        <p>
          <!-- Somos um trio de amigos que adora café e gosta de passar o tempo a
          ouvir jazz. Decidimos materializar esta ideia para mostrar às pessoas
          que esta combinação é perfeita para o seu dia a dia. Com um som
          envolvente no nosso ambiente, o sabor do nosso café especial convida
          todos a juntarem-se a nós e a desfrutarem de momentos memoráveis em
          boa companhia.
        </p>
        <p>
          Somos um trio de amigos que adora café e gosta de passar o tempo a
          ouvir jazz. Decidimos materializar esta ideia para mostrar às pessoas
          que esta combinação é perfeita para o seu dia a dia. Com um som
          envolvente no nosso ambiente, o sabor do nosso café especial convida
          todos a juntarem-se a nós e a desfrutarem de momentos memoráveis em
          boa companhia. -->
          <br />
          Sócios - Artiom Gusanu, Pedro Pacheco e João Marques
          <br />
          <br />
          NiF - 546727530
          <br />
          <br />
          <!-- Tipo de Empresa - privada com fins lucrativos -->
          Empresa do tipo privada com fins lucrativos
          <br />
          <br />
          CAE - 56301 (Exploração de Cafés)
        </p>
      </div>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
