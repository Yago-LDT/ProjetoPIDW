<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar de Folha de Pagamento</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>

  <div class="form-container">
    <div class="form-box">
      <div class="logo-container">
        <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
      </div>
      <form method="post" id="alteracaoFolhaPagamentoForm" action="./.././.././../controle/ControleUsuario.php?ACAO=alterarfolhapagamento">
      <div class="input-container">
          <label for="novoid">ID</label>
          <input type="text" id="novoid" name="novoid" placeholder="Digite o ID do pagamento a ser alterado" required>
        </div>
        <div class="input-container">
          <label for="funcionarioid">ID do Funcionário</label>
          <input type="text" id="funcionarioid" name="funcionarioid" placeholder="Digite o ID do funcionário" required>
        </div>
        <div class="input-container">
          <label for="cargoid">ID do Cargo</label>
          <input type="text" id="cargoid" name="cargoid" placeholder="Digite o ID do cargo" required>
        </div>
        <div class="input-container">
          <label for="salariobruto">Salário Bruto</label>
          <input type="number" id="salariobruto" name="salariobruto" placeholder="Digite o salário bruto" required min="0" step="0.01">
        </div>
        <div class="input-container">
          <label for="beneficios">Benefícios</label>
          <input type="number" id="beneficios" name="beneficios" placeholder="Digite o valor dos benefícios" required min="0" step="0.01">
        </div>
        <div class="input-container">
          <label for="bonus">Bônus</label>
          <input type="number" id="bonus" name="bonus" placeholder="Digite o valor do bônus" required min="0" step="0.01">
        </div>
        <div class="input-container">
          <label for="valorreceber">Valor a Receber</label>
          <input type="number" id="valorreceber" name="valorreceber" placeholder="Digite o valor total a receber" required min="0" step="0.01">
        </div>
        <button type="submit" class="btn-submit">Alterar Folha de Pagamento</button>
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
