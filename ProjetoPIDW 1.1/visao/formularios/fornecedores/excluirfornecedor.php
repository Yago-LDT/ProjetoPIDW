<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Excluir Fornecedor - UltraMix RH</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>

  <div class="login-container">
    <div class="login-box">
      <div class="logo-container">
        <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
      </div>
      <div class="input-container">
        <form method="post" id="excluirfornecedor" action="./.././.././../controle/ControleUsuario.php?ACAO=excluirfornecedor">
          <label for="excluirid">Fornecedor a ser Excluído</label>
          <input type="text" id="excluirid" name="excluirid" placeholder="Digite o ID" required>
        </div>
        <button type="submit" class="btn-submit">Excluir</button>
        <br><br>
        <button type="button" class="btn-submit" onclick="window.location.href='../../../menu.html'">Voltar</button>
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