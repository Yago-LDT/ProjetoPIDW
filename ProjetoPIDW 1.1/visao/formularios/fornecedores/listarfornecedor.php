<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Fornecedor UltraMix RH</title>
  <link rel="stylesheet" href="./../../css/form.css">
</head>
<body>
    <div class="login-container">
        <div class="login-box">
            <div class="logo-container">
                <img src="./../../img/Logotipo_moderno_minimalista_azul_marinho_para_ecommerce-removebg-preview.png" alt="logo" class="logo">
            </div>
            
            <?php
    require './.././../../modelo/DAO/ClassUsuarioDAO.php';

    $ClassUsuarioDAO = new ClassUsuarioDAO();
    $us = $ClassUsuarioDAO->listarfornecedores();

    foreach ($us as $us) {
      echo "<div>";
    	echo "<table>";
      echo "<tr>";
      echo "<td><p>" . $us['id'] . "</p></td>";
      echo "<td><p>" . $us['nome'] . "</p></td>";
      echo "<td><p>" . $us['produto'] . "</p></td>";
      echo "<td><p>" . $us['CNPJ'] . "</p></td>";
      echo "<td><p>" . $us['telefone'] . "</p></td>";
      echo "<td><p>" . $us['email'] . "</p></td>";
      echo "<td><p>" . $us['ultima_remessa'] . "</p></td>";
      echo "<td><p>" . $us['proxima_remessa'] . "</p></td>";
      echo "</tr>"; 
      echo "</table>";
      echo "<div>";

    }

?>
<br><br>
<button type="button" class="btn-submit" onclick="window.location.href='../../../menu.html'">Voltar</button>
            
            <div id="error-message" class="error-message"></div>

            </div>

        </div>
    </div>
    <script src=""></script>
    </body>
    </html>