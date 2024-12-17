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
    <link rel="stylesheet" href="../styles/topicoCinco.css" />
    <title>Tópico 7</title>
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
              <li class="show-movel"><a href="/home.php">home</a></li>
              <li class="show-movel">
                <a href="./sobre-nos.php">Sobre Nós</a>
              </li>
              <li class="show-movel"><a href="">Menu</a></li>
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
