<?php   

    namespace DankiCode\Controllers;

    class ComunidadeController{
        public function index(){
            if(isset($_SESSION['login'])){

                if (isset($_GET['solicitarAmizade'])) {
                    $idPara = (int) $_GET['solicitarAmizade'];
                    if (\Dankicode\Models\UsuariosModel::solicitarAmizade($idPara)) {
                        \DankiCode\Utilidades::alerta('Amizade Solicitada com sucesso!');
                    }else{
                        \DankiCode\Utilidades::alerta('Erro na solicitação! tente mais tarde.');
                    }
                }
            \DankiCode\Views\MainView::render('comunidade');
            }else {
                \DankiCode\Utilidades::redirect(INCLUDE_PATH);
            }
        }
    }
?>