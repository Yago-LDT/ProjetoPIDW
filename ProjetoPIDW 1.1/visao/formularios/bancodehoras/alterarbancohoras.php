<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar de Banco de Horas</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>

  <div class="form-container">
    <div class="form-box">
      <div class="logo-container">
        <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
      </div>
      <form method="post" id="alteracaoBancoHorasForm" action="./.././.././../controle/ControleUsuario.php?ACAO=alterarbancodehoras">
      <div class="input-container">
          <label for="novoid">ID</label>
          <input type="text" id="novoid" name="novoid" placeholder="Digite o ID para alterar banco de horas" required>
        </div>  
      <div class="input-container">
          <label for="funcionarioid">ID do Funcionário</label>
          <input type="text" id="funcionarioid" name="funcionarioid" placeholder="Digite o ID do funcionário" required>
        </div>
        <div class="input-container">
          <label for="horasbanco">Horas em Banco</label>
          <input type="number" id="horasbanco" name="horasbanco" placeholder="Digite as horas em banco" required min="0" step="0.1">
        </div>
        <div class="input-container">
          <label for="ferias">Férias</label>
          <input type="text" id="ferias" name="ferias" placeholder="Ferias tiradas">
        </div>
        <div class="input-container">
          <label for="licencas">Licenças</label>
          <textarea id="licencas" name="licencas" placeholder="Descreva as licenças (se houver)" rows="3"></textarea>
        </div>
        <button type="submit" class="btn-submit">Alterar Banco de Horas</button>
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

</body>
</html>
