<?php
session_start();

include_once "models/Usuario.php"; 

    class UsuarioController{
        public function acao($rotas){
            switch($rotas){ 
                case "formulario-usuario":
                    $this->viewFormularioUsuario();
                break;    

                case "cadastrar-usuario":
                    $this->cadastroUsuario();
                break;
            }    
        }


        private function viewFormularioUsuario(){
            include "views/newUsuario.php";
        }

        
        private function cadastroUsuario(){
            $nomeArquivo = $_FILES['profile_picture']['name'];
            $linkTemp = $_FILES['profile_picture']['tmp_name'];
            $caminhoSalvo = "views/img/$nomeArquivo";
            $nome = $_POST['nome']; 
            $email = $_POST['email'];
            $senha = $_POST['senha'];
            //NÃO CONSEGUI FAZER A SENHA CRIPTOGRAFADA FUNCIONAR, SE PUDEREM ME PASSAR DICAS, AGRADEÇO!!
            move_uploaded_file($linkTemp, $caminhoSalvo);       //salvamos o arquivo.

            $usuario = new Usuario();
            $resultado = $usuario->criarUsuario($nome, $email, $senha, $caminhoSalvo);

            if($resultado){
                header('Location:/fake-insta/posts');       //tá redirecionando pros posts.
                // echo "Cadastro com sucesso";
            } else {
                echo "Não foi possível carregar a sua foto.";
            }
        }

        
    }