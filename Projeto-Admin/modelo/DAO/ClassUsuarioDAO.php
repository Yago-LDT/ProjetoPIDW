<?php
require_once 'Conexao.php';

class ClassUsuarioDAO 
{
    public function login (ClassUsuario $loginUsuario) {
        try{
            $pdo = Conexao::getInstance();
            $sql = "SELECT * FROM login WHERE usuario=:usuario";
            $stmt = $pdo->prepare($sql);

            $stmt->bindValue(':usuario', $loginUsuario->getUsuario());

            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            

            if ($user) {
                return $user;
            } else {
                return false;
            }

        }catch(PDOException $ex){
            return $ex->getMessage();
             }
        }

    }
