<?php
    namespace DankiCode\Controllers;

    class HomeController {

        public function index(){

            if(isset($_SESSION['login'])){
                //renderiza a home do usuario.
            }else{
                //renderizar para criar conta.
            }

        }

    }

?>