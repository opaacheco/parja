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
    <link rel="stylesheet" href="../styles/topicoTres.css" />
    <title>Tópico 2</title>
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
