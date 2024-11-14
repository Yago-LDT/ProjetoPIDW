<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Fornecedor</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>

  <div class="form-container">
    <div class="form-box">
      <div class="logo-container">
        <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
      </div>
      <form method="post" id="cadastroFornecedorForm" action="./.././.././../controle/ControleUsuario.php?ACAO=cadastrarfornecedor">
        <div class="input-container">
          <label for="nome">Nome</label>
          <input type="text" id="nome" name="nome" placeholder="Digite o nome do fornecedor" required>
        </div>
        <div class="input-container">
          <label for="produto">Produto</label>
          <input type="text" id="produto" name="produto" placeholder="Digite o produto fornecido" required>
        </div>
        <div class="input-container">
          <label for="cnpj">CNPJ</label>
          <input type="text" id="CNPJ" name="CNPJ" placeholder="Digite o CNPJ" required pattern="\d{13,14,15}" title="Insira um CNPJ com 13-15 dígitos numéricos">
        </div>
        <div class="input-container">
          <label for="telefone">Telefone</label>
          <input type="tel" id="telefone" name="telefone" placeholder="Digite o telefone" required pattern="\d{10,11}" title="Insira um telefone válido (10 ou 11 dígitos)">
        </div>
        <div class="input-container">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="Digite o email" required>
        </div>
        <div class="input-container">
          <label for="ultimaremessa">Última Remessa</label>
          <input type="date" id="ultimaremessa" name="ultimaremessa" placeholder="Digite a data da última remessa (se houver)" required>
        </div>
        <div class="input-container">
          <label for="proximaremessa">Próxima Remessa</label>
          <input type="date" id="proximaremessa" name="proximaremessa" placeholder="Digite a data da próxima remessa" required>
        </div>
        <button type="submit" class="btn-submit">Cadastrar Fornecedor</button>
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
