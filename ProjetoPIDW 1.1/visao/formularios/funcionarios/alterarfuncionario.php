<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alteração de Funcionário</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>

  <div class="form-container">
    <div class="form-box">
      <div class="logo-container">
        <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
      </div>
      <form method="post" id="alteracaofuncionario" action="./.././.././../controle/ControleUsuario.php?ACAO=alterarfuncionario">
        
      <div class="input-container">
          <label for="novoid">ID</label>
          <input type="text" id="novoid" name="novoid" placeholder="Digite o ID do funcionário para alterar" required>
        </div>

        <div class="input-container">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" placeholder="Digite o nome do funcionário" required>
        </div>

        <div class="input-container">
          <label for="cpf">CPF</label>
          <input type="text" id="cpf" name="cpf" placeholder="Digite o CPF" required pattern="\d{11}" title="Insira um CPF com 11 dígitos numéricos">
        </div>
        <div class="input-container">
          <label for="cargo">Cargo</label>
          <input type="text" id="cargo" name="cargo" placeholder="Digite o cargo" required>
        </div>
        <div class="input-container">
          <label for="salario">Salário</label>
          <input type="number" id="salario" name="salario" placeholder="Digite o salário" required min="0" step="0.01" title="Insira um valor numérico para o salário">
        </div>
        <div class="input-container">
          <label for="data_admissao">Data de Admissão</label>
          <input type="date" id="data_admissao" name="data_admissao" required>
        </div>
        <div class="input-container">
          <label for="telefone">Telefone</label>
          <input type="tel" id="telefone" name="telefone" placeholder="Digite o telefone" required pattern="\d{10,11}" title="Insira um telefone válido (10 ou 11 dígitos)">
        </div>
        <div class="input-container">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Digite o email" required>
        </div>

        <button type="submit" class="btn-submit">Alterar dados do funcionário</button>
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
