<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Alterar  Avaliação</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>

  <div class="form-container">
    <div class="form-box">
      <div class="logo-container">
        <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
      </div>
      <form method="post" id="alteracaoAvaliacaoForm" action="./.././.././../controle/ControleUsuario.php?ACAO=alteraravaliacao">

        <div class="input-container">
          <label for="Novoid">ID da Avaliação</label>
          <input type="text" id="novoid" name="novoid" placeholder="Digite o ID da avaliação para alterar" required>
        </div>

        <div class="input-container">
          <label for="funcionarioid">ID do Funcionário</label>
          <input type="text" id="funcionarioid" name="funcionarioid" placeholder="Digite o ID do funcionário" required>
        </div>

        <div class="input-container">
          <label for="produtividade">Produtividade</label>
          <input type="number" id="produtividade" name="produtividade" placeholder="Nota de produtividade (0 a 10)" required min="0" max="10" step="1">
        </div>

        <div class="input-container">
          <label for="empenho">Empenho</label>
          <input type="number" id="empenho" name="empenho" placeholder="Nota de empenho (0 a 10)" required min="0" max="10" step="1">
        </div>

        <div class="input-container">
          <label for="relatorio">Relatório</label>
          <textarea id="relatorio" name="relatorio" placeholder="Digite o relatório de avaliação" rows="4" required></textarea>
        </div>

        <div class="input-container">
          <label for="recomendapromocao">Recomenda Promoção</label>
          <select id="recomendapromocao" name="recomendapromocao" required>
            <option value="">Selecione uma opção</option>
            <option value="Sim">Sim</option>
            <option value="Não">Não</option>
          </select>
        </div>
        
        <button type="submit" class="btn-submit">Alterar Avaliação</button>
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
