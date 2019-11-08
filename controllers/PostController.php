<?php

include_once "models/Post.php";     //incluiu o Post para o controller saber onde salvar os dados. O post conecta com o banco de dados.

    class  PostController {
        public function acao($rotas){
            switch($rotas){   //qual ação vai tomar. O que fazer com a informação que o usuário que me deu.
                case "posts":
                    $this->viewPost();
                break;
                case "formulario-post":
                    $this->viewFormularioPost();        //mostra a view do formulário
                break;
                case "cadastrar-post":
                    $this->cadastroPost();
                break;
                    
            }                  
        }

        private function viewFormularioPost(){   //função void, apenas inclui a view. É privado pra apenas o controller chamar a view.
            include "views/newPost.php";
        }

        private function viewPost(){
            include "views/posts.php";
        }

        private function cadastroPost(){    //reccebe POST e FILES
            $desccricao = $_POST['descricao'];
            $nomeArquivo = $_FILES['img']['name'];
            $linkTemp = $_FILES['img']['tmp_name'];
            $caminhoSalvo = "views/img/$nomeArquivo";           //vai salvar as imagens na view.

            move_uploaded_file($linkTemp, $caminhoSalvo);       //salvamos o arquivo.

            $post = new Post();
            $resultado = $post->criarPost($caminhoSalvo, $desccricao);

            if($resultado){
                header('Location:/fake-insta/posts');           //tá redirecionando pros posts.
            }
        }
    }