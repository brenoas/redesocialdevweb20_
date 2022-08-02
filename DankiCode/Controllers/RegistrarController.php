<?php
    namespace DankiCode\Controllers;

    class RegistrarController {

        public function index(){

            if (isset($_POST['registrar'])) {
                $nome = $_POST['nome'];
                $email = $_POST['email'];
                $senha = $_POST['senha'];
            }

                \DankiCode\Views\MainView::render('registrar');

        }

    }

?>