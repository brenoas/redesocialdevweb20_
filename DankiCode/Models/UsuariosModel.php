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

        
        public static function listarComunidade(){
            $pdo = \DankiCode\MySql::connect();

            $comunidade = $pdo->prepare("SELECT * FROM usuarios");

            $comunidade->execute();

            return $comunidade->fetchAll();
        }

        public static function solicitarAmizade($idPara){
            $pdo = \DankiCode\MySql::connect();

            $verificaAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");

            $verificaAmizade->execute(array($_SESSION['id'],$idPara,$idPara,$_SESSION['id']));

            if ($verificaAmizade->rowCount() == 1) {
                return false;
            }else {
                //podemos inserir no banco a solicitação
                $insertAmizade = $pdo->prepare("INSERT INTO amizades VALUES (null,?,?,0)");
                if(
                $insertAmizade->exeute(array($_SESSION['id'],$idPara))){
                    return true;
                }
            }

            return true;
        }


        public static function listarAmizadesPendentes(){
            $pdo = \DankiCode\MySql::connect();

            $listarAmizadesPendentes = $pdo->prepare("SELECT * FROM amizades WHERE recebeu = ? AND status = 0");

            $listarAmizadesPendentes->execute(array($_SESSION['id']));

            return $listarAmizadesPendentes->fetchAll();
        }

        public static function getUsuarioById($id){
            $pdo = \DankiCode\MySql::connect();

            $usuario = $pdo->prepare("SELECT * FROM usuarios WHERE id = ?");

            $usuario->execute(array($id));

            return $usuario->fetch();
        }


        public static function existePedidoAmizade($idPara){
            $pdo = \DankiCode\MySql::connect();

            $verificaAmizade = $pdo->prepare("SELECT * FROM amizades WHERE (enviou = ? AND recebeu = ?) OR (enviou = ? AND recebeu = ?)");

            $verificaAmizade->execute(array($_SESSION['id'],$idPara,$idPara,$_SESSION['id']));

            if ($verificaAmizade->rowCount() == 1) {
                return false;
            }else {
                return true;
            }

        }

        public static function atualizarPedidoAmizade($enviou,$status){
            $pdo = \DankiCode\MySql::connect();

            if ($status == 0) {
                //recusei o pedido.
                
                $del = $pdo->prepare("DELETE FROM amizades WHERE enviou = ? AND receubeu = ? AND status = 0");
                $del->execute(array($enviou,$_SESSION['id']));
            }elseif($status == 1){

                $aceitarPedido = $pdo->prepare("UPDATE amizades SET status = 1 WHERE enviou = ? AND recebeu = ?");

                $aceitarPedido->execute(array($enviou,$_SESSION['id']));

                if ($aceitarPedido->rowCount()== 1) {
                    return true;
                }else {
                    return false;
                }

            }

        }




    }
