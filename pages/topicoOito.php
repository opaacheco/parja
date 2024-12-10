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
    <title>Tópico 8</title>
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
