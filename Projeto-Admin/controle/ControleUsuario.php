<?php
require_once '../modelo/ClassUsuario.php';
require_once '../modelo/DAO/ClassUsuarioDAO.php';

$usuario =@$_POST['usuario'];
$senha =@$_POST['senha'];
$acao = $_GET['ACAO'];

$autenticarlogin = new ClassUsuario();
$autenticarlogin->setUsuario($usuario);
$autenticarlogin->setSenha($senha);

$ClassUsuarioDAO = new ClassUsuarioDAO();

switch($acao) {
    case "autenticarlogin":
        $resultado = $ClassUsuarioDAO->login($autenticarlogin);

    if($resultado >= 1){
        header('Location: ../index.php?&MSG= Login realizado com sucesso!');
        exit();
    
    } else{
        $_SESSION['mensagem'] = "Não foi possível realizar o login, usuário ou senha inválidos!";
        exit();
    }

    break;
}
?>