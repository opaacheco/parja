<?php

function displayLogoutLogin($emailAuxiliar){
  if ($emailAuxiliar) {
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
}

function displayMenu($typePage, $result, $emailAuxiliar){
  
    if($typePage === 'register'){
        echo "<div class='formContainer'>";
        echo "<h1>REGISTRAR</h1>";
        echo <<<HTML
        <form method='GET' action='menu.php'>
          <input type='text' name='name' placeholder='Nome' required/>
          <input type='email' name='email' placeholder='Email' required/>
          <input type='password' name='password' placeholder='Senha' required/>
          <button type='submit' name='registarBD'>Registar</button>
          <button type='submit'><a href="menu.php" color='#e6ddbc'>login</a></button>
        </form>
      HTML;
        echo "</div>";
      } elseif($typePage === 'produtos' || $emailAuxiliar){
        if (count($result) > 0) {
            foreach ($result as $row) {
              $id = $row["id"];
              $nome = htmlspecialchars($row["nome"]);
              $fotoUrl = htmlspecialchars($row["foto_url"]);
              $preco = htmlspecialchars($row["preco"]);
              echo <<<HTML
                <div class='produto' onclick="window.location.href='detalhes_produto.php?id=$id'">
                  <h1>$nome</h1>
                  <img src='../$fotoUrl' alt='Imagem do Produto' width='200'/><br>
                  <input type='hidden' name='$id'>
                  <h2>€$preco</h2>
                  <button>adicionar</button>
                </div>
              HTML;
            }
          } else {
              echo "<h1>Nenhum resultado encontrado.</h1>";
          }
        } else {
        echo "<div class='formContainer'>";
        echo "<h1>LOGIN</h1>";
        if($_SESSION["erros"] == ""){
            echo <<<HTML
            <form method='GET' action='menu.php'>
              <input type='email' name='email' placeholder='Email' required/>
              <input type='password' name='password' placeholder='Senha' required/>
              <button type='submit' name="login">entrar</button>
            </form>
      
            <form method='GET' action='menu.php'>
              <input type='hidden' name='registar' value='true' />
              <button type='submit'>registar</button>
            </form>
          HTML;
        }else{
          echo <<<HTML
          <form method='GET' action='menu.php'>
            <input type='email' name='email' placeholder='Email' required/>
            <input type='password' name='password' placeholder='Senha' required/>
            <p id="errors">credenciais inválidas</p>
            <button type='submit' name="login">entrar</button>
          </form>
      
          <form method='GET' action='menu.php'>
            <input type='hidden' name='registar' value='true' />
            <button type='submit'>registar</button>
          </form>
        HTML;
        }
        echo "</div>";
      }
}

function logout(){
  echo <<<HTML
  <div>
  <button>logout</button>
  </div>
  HTML;
}

function addProdutos(){}
// echo <<<HTML
// <div class='produto' onclick="window.location.href='detalhes_produto.php?id=$id'">
//   <h1>$nome</h1>
//   <img src='../$fotoUrl' alt='Imagem do Produto' width='200'/><br>
//   <input type='hidden' name='$id'>
//   <h2>€$preco</h2>
//   <button>adicionar</button>
// </div>
// HTML;


?>