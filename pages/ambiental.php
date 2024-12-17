<?php
session_start();
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
    <header>
      <div class="logo-slogan">
        <img src="../images/logo.png" alt="" />
        <h1 class="titulo">PARJA</h1>
        <p class="frase">o som que atrai e o sabor que conquista</p>
      </div>

      <div class="opcoes">
        <nav>
          <ul>
            <li><a href="./home.php">home</a></li>
            <li><a href="./sobre-nos.php">Sobre Nós</a></li>
            <li><a href="./menu.php">Menu</a></li>
            <li><a href="./playlist.php">Playlist</a></li>
          </ul>
          <div class="linha"></div>
        </nav>
        <div class="profile-container">
        <?php
          if (!empty($_SESSION['email'])) {
            // Usuário logado
            echo '<div class="profile-container">
                    <i id="profile-icon" class="material-icons">account_circle</i>
                    <div class="dropdown" id="dropdown">
                        <p><strong>Email:</strong> ' . htmlspecialchars($_SESSION['email']) . '</p>
                        <a href="menu.php?logout=true" class="logout-button">Logout</a>
                    </div>
                  </div>';
        } else {
            // Usuário não logado
            echo '<div class="profile-container">
                    <i id="profile-icon" class="material-icons profile-icon">account_circle</i>
                    <div class="dropdown" id="dropdown">
                        <a href="menu.php" /*class="login-button"*/ >Login/Registrar</a>
                    </div>
                  </div>';
        }
        
        ?>
      </div>
        <div class="menu-obscuro">
          <i onclick="comutarMenu()" id="hamburguer" class="material-icons"
            >menu</i
          >
          <div id="menu-hidde">
            <ul class="nav-hidde">
              <li class="show-movel"><a href="./home.php">home</a></li>
              <li class="show-movel">
                <a href="./sobre-nos.php">Sobre Nós</a>
              </li>
              <li class="show-movel"><a href="./menu.php">Menu</a></li>
              <li class="show-movel">
                <a href="./playlist.php">Playlist</a>
              </li>
              <li>
                <a href="./topicoUm.php">Tópico 1</a>
              </li>
              <li>
                <a href="./topicoDois.php">Tópico 2</a>
              </li>
              <li>
                <a href="./topicoTres.php">Tópico 3</a>
              </li>
              <li>
                <a href="./topicoQuatro.php">Tópico 4</a>
              </li>
              <li>
                <a href="./topicoCinco.php">Tópico 5</a>
              </li>
              <li>
                <a href="./topicoSeis.php">Tópico 6</a>
              </li>
              <li>
                <a href="./topicoSete.php">Tópico 7</a>
              </li>
              <li>
                <a href="./topicoOito.php">Tópico 8</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <main>
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

    <footer>
      <div class="contatos">
        <ul>
          <li>Telefone - 912902536</li>
          <li>E-mail - parja.international@gmail.com</li>
          <li>Localização - Rua Augusta n° 22</li>
        </ul>
      </div>
      <div class="contatos">
        <ul>
          <li class="redes-sociais">
            <a href=""><img src="../images/facebook.png" alt="" /></a>
          </li>
          <li class="redes-sociais">
            <a href=""><img src="../images/instagram.png" alt="" /></a>
          </li>
          <li class="redes-sociais">
            <a href=""><img src="../images/twitter.png" alt="" /></a>
          </li>
        </ul>
      </div>
      <p>© todos direitos reservados ©</p>
    </footer>
    <script src="../script/main.js"></script>
  </body>
</html>
