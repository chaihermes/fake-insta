<?php

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
                
                //com a rota estabelecida na index, aqui no controller, está dizendo o que fazer com essa informação. A função vai dizer que é pra ir pra view e devolver a página solicitada ao usuário.
            }    
        }

        private function cadastroUsuario(){
            $nomeArquivo = $_FILES['profile_picture']['name'];
            $linkTemp = $_FILES['profile_picture']['tmp_name'];
            $caminhoSalvo = "views/img/$nomeArquivo";
            $nome = $_POST['nome']; 
            $email = $_POST['email'];
            $senha = $_POST['senha'];

            move_uploaded_file($linkTemp, $caminhoSalvo);       //salvamos o arquivo.

            $usuario = new Usuario();
            $resultado = $usuario->criarUsuario($nome, $email, $senha, $caminhoSalvo);

            if($resultado){
                //header('Location:/fake-insta/posts');          //tá redirecionando pros posts.
                echo "Cadastro com sucesso";
            } else {
                echo "Não foi possível carregar a sua foto.";
            }
        }

        private function viewFormularioUsuario(){
            include "views/newUsuario.php";
        }
    }