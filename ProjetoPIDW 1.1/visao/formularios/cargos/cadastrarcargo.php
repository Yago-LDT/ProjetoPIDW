<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de Cargo</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>

  <div class="form-container">
    <div class="form-box">
      <div class="logo-container">
        <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
      </div>
      <form method="post" id="cadastroCargoForm" action="./.././.././../controle/ControleUsuario.php?ACAO=cadastrarcargo">
        <div class="input-container">
          <label for="titulo">Título do Cargo</label>
          <input type="text" id="titulo" name="titulo" placeholder="Digite o título do cargo" required>
        </div>
        <div class="input-container">
          <label for="cargahoraria">Carga Horária</label>
          <input type="number" id="cargahoraria" name="cargahoraria" placeholder="Digite a carga horária semanal (em horas)" required min="1" max="44">
        </div>
        <div class="input-container">
          <label for="funcao">Função</label>
          <textarea id="funcao" name="funcao" placeholder="Descreva a função do cargo" required></textarea>
        </div>
        <div class="input-container">
          <label for="faixasalarial">Faixa Salarial</label>
          <input type="text" id="" name="faixasalarial" placeholder="Digite a faixa salarial" required>
        </div>
        <button type="submit" class="btn-submit">Cadastrar Cargo</button>
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
