<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar  Contrato</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>

  <div class="form-container">
    <div class="form-box">
      <div class="logo-container">
        <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
      </div>
      <form method="post" id="alteracaoContratoForm" action="./.././.././../controle/ControleUsuario.php?ACAO=alterarcontrato">
        
      <div class="input-container">
          <label for="novoid">ID</label>
          <input type="text" id="novoid" name="novoid" placeholder="Digite o ID do contrato para alterar" required>
        </div>

        <div class="input-container">
          <label for="fornecedorid">ID do Fornecedor</label>
          <input type="text" id="fornecedorid" name="fornecedorid" placeholder="Digite o ID do fornecedor" required>
        </div>
        <div class="input-container">
          <label for="duracao">Duração do Contrato</label>
          <input type="text" id="duracao" name="duracao" placeholder="Digite a duração (em meses ou anos)" required>
        </div>
        <div class="input-container">
          <label for="produto_quantidade">Quantidade do Produto</label>
          <input type="number" id="produtoquantidade" name="produtoquantidade" placeholder="Digite a quantidade do produto" required min="0">
        </div>
        <div class="input-container">
          <label for="custos">Custos</label>
          <input type="number" id="custos" name="custos" placeholder="Digite o custo total" required min="0" step="0.01">
        </div>
        
        <button type="submit" class="btn-submit">Alterar Contrato</button>
        <br><br>
        <button type="button" class="btn-submit" onclick="window.history.back()">Voltar</button>
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
