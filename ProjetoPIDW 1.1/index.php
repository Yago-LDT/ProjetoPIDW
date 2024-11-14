<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login UltraMix RH</title>
  <link rel="stylesheet" href="visao/css/form.css">
</head>
<body>


  <div class="login-container">
    <div class="login-box">
      <div class="logo-container">
        <img src="visao/img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" class="logo">
      </div>
      <form method="post" id="loginForm" action="controle/ControleUsuario.php?ACAO=autenticarlogin">
        <div class="input-container">
          <label for="usuario">Usuário</label>
          <input type="text" id="usuario" name="usuario" placeholder="Digite seu usuário" required>
        </div>
        <div class="input-container">
          <label for="senha">Senha</label>
          <input type="password" id="senha" name="senha" placeholder="Digite sua senha" required>
        </div>
        <button type="submit" class="btn-submit">Entrar</button>
      </form>
      <div id="error-message" class="error-message"></div>

      <?php
  session_start();

  if (isset($_SESSION['mensagem'])) {
    echo "<div class='error-message'>{$_SESSION['mensagem']}</div>";
    unset($_SESSION['mensagem']);
  }
?>

    </div>
  </div>
  <script src=""></script>
</body>
</html>
