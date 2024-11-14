<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login UltraMix RH</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo-container">
                <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
            </div>
                <form method="post" id="alterarlogin" action="./.././.././../controle/ControleUsuario.php?ACAO=alterarlogin">
                    <div class="input-container">
                    <label for="ID">ID para alterar</label>
                    <input type="text" id="novoid" name="novoid" placeholder="Digite o ID do usuário para alterar" required>
                    </div>

                    <div class="input-container">
                    <label for="novousuario">Novo Usuário</label>
                    <input type="text" id="novousuario" name="novousuario" placeholder="Digite o novo usuário" required>
                    </div>

                    <div class="input-container">
                    <label for="novasenha">Nova Senha</label>
                    <input type="password" id="novasenha" name="novasenha" placeholder="Digite a nova senha" required>
                    </div>
                
                <button type="submit" class="btn-submit">Alterar</button>
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
    