<?php
    namespace DankiCode\Controllers;

    class HomeController {

        public function index(){

            if (isset($_GET['logout'])) {
                session_unset();
                session_destroy();

                \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                
            }

            if(isset($_SESSION['login'])){
                //renderiza a home do usuario.

                //existe pedido de amizade?
                if(isset($_GET['recusarAmizade'])){
                    $idEnviou = (int) $_GET['recusarAmizade'];
                    \DankiCode\Models\UsuariosModel::atualizarPedidoAmizade($idEnviou,0);
                    \DankiCode\Utilidades::alerta('Amizade Recusada.');
                    \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                }elseif (isset($_GET['aceitarAmizade'])) {
                    $idEnviou = (int) $_GET['aceitarAmizade'];
                    if(\DankiCode\Models\UsuariosModel::atualizarPedidoAmizade($idEnviou,1)){
                        \DankiCode\Utilidades::alerta('Amizade Aceita!');
                        \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                    }else {
                        \DankiCode\Utilidades::alerta('Ops.. um erro ocorreu!');
                        \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                    }
                    
                    
                }

                \DankiCode\Views\MainView::render('home');
            }else{
                //renderizar para criar conta.

                if (isset($_POST['login'])) {
                    $login = $_POST['email'];
                    $senha = $_POST['senha'];

                    //verificar no banco de dados.

                    $verifica = \DankiCode\MySql::connect()->prepare("SELECT * FROM usuarios WHERE email = ?");
                    $verifica->execute(array($login));

                    if ($verifica->rowCount() == 0) {
                        //não existe o usuario
                        \DankiCode\Utilidades::alerta('Usuário não encontrado.');
                        \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                    }else {
                        $dados = $verifica->fetch();
                        $senhaBanco = $dados['senha'];
                        if (\DankiCode\Bcrypt::check($senha,$senhaBanco)) {
                            //usuario logado com sucesso
                            $_SESSION['login'] = $dados['email'];
                            $_SESSION['id'] = $dados['id'];
                            $_SESSION['nome'] = explode(' ',$dados['nome'])[0];
                           // \DankiCode\Utilidades::alerta('Logado com sucesso!');
                            \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                        }else{
                            \DankiCode\Utilidades::alerta('Senha Inválida.');
                            \DankiCode\Utilidades::redirect(INCLUDE_PATH);
                        }
                    }



                }

                \DankiCode\Views\MainView::render('login');
            }

        }

    }

?>