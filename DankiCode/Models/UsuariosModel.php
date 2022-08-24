<?php
    namespace DankiCode\Models;

    class UsuariosModel{

        public static function emailExists($email){
            $pdo = \DankiCode\MySql::connect();
            $verificar = $pdo->prepare("SELECT email FROM usuarios WHERE email = ?");
            $verificar->execute(array($email));
            
            if ($verificar->rowCount() == 1) { 
                //email existe...
                return true;
            }else {
                return false;
            }
        }

    }


?>