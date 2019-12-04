<?php

session_start();

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

                case "logout":
                    $this->viewLogout();
                break;
            }
        }
    
        private function viewFormLogin(){
            include "views/login.php"; 
        }

        private function viewAutenticarLogin(){
            //objeto login:
            $login = new Login();
            //recebendo dados do banco de dados:
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            //autenticando o usuário no banco de dados:
            $resultado = $login->autenticarUsuario($email, $senha);
            

            if($resultado){
                $_SESSION['usuarioNome'] = [$resultado[0]['nome']]; 
            //     // var_dump([$resultado[0]['nome']]); ESTÁ RETORNANDO NULL
            //     // exit;
            //     //Aqui está buscando o campo nome dentro do array
                $_SESSION['usuarioId'] = [$resultado[0]['id']];     
            //     // var_dump([$resultado[0]['id']]);    ESTÁ RETORNANDO NULL
            //     // exit;  
            //     //Aqui está buscando o id do usuário logado.
                header('Location:/fake-insta/posts');       
            } else {
                echo "Fazer cadastro";
            }
        }

        private function viewLogout(){
            session_start();
            session_unset();
            session_destroy();
            header('Location:/fake-insta/posts');
        }
        //quando a sessão é encerrada volta pra página de posts.
    }