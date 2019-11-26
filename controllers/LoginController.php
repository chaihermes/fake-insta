<?php

include_once "models/Login.php"; 

    class LoginController{
        public function acao($rotas){
            switch($rotas){ 
                case "form-login":
                    $this->viewFormLogin();
                break;

                case "autenticar-login":
                    $this->viewAutenticarLogin();
                break;
            }
        }
    
        private function viewFormLogin(){
            include "views/newLogin.php"; 
        }

        private function viewAutenticarLogin(){
            //objeto login:
            $login = new Login();
            //recebendo dados do banco de dados:
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            //autenticando o usuário no banco de dados:
            $resultado = $login->autenticarUsuario($email, $senha);
            //var_dump($resultado);
            
            if($resultado){
                //echo "Login com sucesso";
                session_start();
                $_SESSION['login'] = $resultado[0];
                $_SESSION['login']['nome'];
                header('Location:posts');
            } else {
                echo "Fazer cadastro";
            }
        }
    }