<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Folha de Ponto</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>

  <div class="form-container">
    <div class="form-box">
      <div class="logo-container">
        <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
      </div>
      <form method="post" id="cadastroFolhaPontoForm" action="./.././.././../controle/ControleUsuario.php?ACAO=cadastrarfolhaponto">
        <div class="input-container">
          <label for="funcionarioid">ID do Funcionário</label>
          <input type="text" id="funcionarioid" name="funcionarioid" placeholder="Digite o ID do funcionário" required>
        </div>
        <div class="input-container">
          <label for="horariochegada">Horário de Chegada</label>
          <input type="time" id="horariochegada" name="horariochegada" required>
        </div>
        <div class="input-container">
          <label for="horariosaida">Horário de Saída</label>
          <input type="time" id="horariosaida" name="horariosaida" required>
        </div>
        <button type="submit" class="btn-submit">Cadastrar Folha de Ponto</button>
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
