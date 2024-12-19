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
    <link rel="stylesheet" href="../styles/topicoDois.css" />
    <title>Tópico 2</title>
  </head>
  <body>
    <?php 
      navBar($emailAuxiliar)
    ?>
    <main>
      <div class="opcao-hide">
        <h1>Ánalise Swot</h1>
      </div>
      <div class="topicoDois">

            <div id="forcas" class="swot" >
              <h2>FORÇAS</h2>
              <ul>
                <li>Qualidade</li>
                <li>Ambiente Inovador e Acolhedor</li>
                <li>
                  Atendimento extremamente cordial, incluindo visitas à casa do
                  cliente
                </li>
                <li>Variedade e Experimentação</li>
                <li>Conexão com a Natureza e Sustentabilidade</li>
              </ul>
            </div>

            <div id="fraquezas" class="swot">
              <h2>FRAQUEZAS</h2>
              <ul>
                <li>Falta de Estacionamento</li>
                <li>Horários Bem Específicos</li>
                <li>Explicação Excessiva dos Produtos</li>
                <li>Foco Intenso nos Clientes</li>
                <li>Custo de Manutenção do Espaço</li>
              </ul>
            </div>

            <div  id="oportunidades" class="swot">
              <h2>OPORTUNIDADES</h2>
              <ul>
                <li>Eventos de degustação</li>
                <li>Maior divulgação local</li>
                <li>Parceria com apps de entrega</li>
                <li>Eventos de Jazz ao Vivo</li>
                <li>Expansão nas Redes Sociais</li>
              </ul>
            </div>

            <div  id="ameacas" class="swot">
              <h2>AMEAÇAS</h2>
              <ul>
                <li>Concorrência de Cafetarias</li>
                <li>Variações no Custo dos Grãos de Café</li>
                <li>Estação do Ano</li>
                <li>Dependência do Turismo</li>
                <li>Preferências por Consumo Rápido</li>
              </ul>
            </div>

      </div>

      <!-- começo forças -->
      <div class="container-hides">
        <div class="opcao-hide" onclick="openOpcaoForca()">
          <i id="flecha-forca" class="material-icons">arrow_forward</i>
          
          <h1>Forças</h1>
        </div>
        <div id="explicacao-forca" class="forca-explicacao">
          <ul>
            <li>
              <strong>Qualidade:</strong>
              Produtos premium para uma experiência única.
            </li>
            <li>
              <strong>Ambiente Acolhedor:</strong>
              Espaço inovador com sofás e escorrega para um toque descontraído.
            </li>
            <li>
              <strong>Atendimento Cordial:</strong>
              A Serviço personalizado, incluindo visitas à casa do cliente.
            </li>
            <li>
              <strong>Variedade e Experimentação:</strong>
              Opções únicas, como cafés exóticos e sobremesas diferentes.
            </li>
            <li>
              <strong>Sustentabilidade: </strong>
              Compromisso com práticas ecológicas e conexão com a natureza.
            </li>
          </ul>
        </div>
        <!-- começo fraquezas -->
        <div class="opcao-hide" onclick="openOpcaoFraqueza()">
          <i id="flecha-fraqueza" class="material-icons">arrow_forward</i>
          <h1>Fraquezas</h1>
        </div>
        <div id="explicacao-fraquezas" class="explicacao-fraqueza">
          <ul>
            <li>
              <strong>Falta de Estacionamento:</strong>
              Limita o acesso de clientes de carro.
            </li>
            <li>
              <strong>Horários Específicos: </strong>
              Menos flexibilidade para diferentes rotinas.
            </li>
            <li>
              <strong>Explicação Excessiva:</strong>
              Pode tornar o atendimento longo e denso.
            </li>
            <li>
              <strong>Foco Intenso no Cliente:</strong>
              Pode parecer invasivo ou sobrecarregar a equipe.
            </li>
            <li>
              <strong>Custo de Manutenção:</strong>
              Manter os sofás e o escorrega é caro e desafiador para a sustentabilidade.
            </li>
          </ul>
        </div>
        <!-- começo oportunidades -->
        <div class="opcao-hide" onclick="openOpcaoOportunidade()">
          <i id="flecha-oportunidade" class="material-icons">arrow_forward</i>
          <h1>Oportunidade</h1>
        </div>
        <div id="explicacao-oportunidade" class="oportunidade-explicacao">
          <ul>
            <li>
              <strong>Eventos de Degustação:</strong>
              Atrai clientes ao oferecer uma experiência única de sabores.
            </li>
            <li>
              <strong>Divulgação Local:</strong> Fortalece a marca na
              comunidade.
            </li>
            <li>
              <strong>Parceria com Apps de Entrega: </strong>Expande o alcance e
              as vendas.
            </li>
            <li>
              <strong>Jazz ao Vivo:</strong> Diferencia o espaço com noites
              temáticas.
            </li>
            <li>
              <strong>Redes Sociais: </strong>
              Aumenta a visibilidade e atrai fãs de café e jazz.
            </li>
          </ul>
        </div>
        <!-- começo ameaças -->
        <div class="opcao-hide" onclick="openOpcaoAmeacas()">
          <i id="flecha-ameacas" class="material-icons">arrow_forward</i>
          <h1>Ameaças</h1>
        </div>
        <div id="explicacao-ameacas" class="ameacas-explicacao">
          <ul>
            <li>
              <strong>Eventos de Degustação:</strong>
              Atrai clientes ao oferecer uma experiência única de sabores.
            </li>
            <li>
              <strong>Divulgação Local:</strong> Fortalece a marca na
              comunidade.
            </li>
            <li>
              <strong>Parceria com Apps de Entrega:</strong> Expande o alcance e
              as vendas.
            </li>
            <li>
              <strong>Jazz ao Vivo: </strong>Diferencia o espaço com noites
              temáticas.
            </li>
            <li>
              Redes Sociais: Aumenta a visibilidade e atrai fãs de café e jazz.
            </li>
          </ul>
        </div>
      </div>
      <div class="esquemas">
      <h2>Recursos e Departamentos</h2>
      <img src="../images/recursos-departamentos.png" alt="Esquema de Recursos e Departamentos" class="esquema-imagem1" />

      <h2>Organograma da Empresa</h2>
      <img src="../images/organograma-empresa.jpg" alt="Esquema do Organograma da Empresa" class="esquema-imagem2" />
      <h6>(ainda vamos melhorar a qualidade da imagem)</h6>
    </div>
    </main>
    <?php 
      footerBar()
    ?>
    <script src="../script/main.js"></script>
  </body>
</html>
