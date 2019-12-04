<?php

session_start();

include_once "models/Post.php";     //incluiu o Post para o controller saber onde salvar os dados. O post conecta com o banco de dados.

    class  PostController {
        public function acao($rotas){
            switch($rotas){   //qual ação vai tomar. O que fazer com a informação que o usuário me deu.
                case "posts":
                    $this->listarPosts(); //aqui meio que chama os dois métodos ao mesmo tempo. Listar posts e view posts.
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
            if(isset($_SESSION['usuarioNome'][0])){
            // var_dump($_SESSION['usuarioNome'][0]); ESTÁ RETORNANDO NULL
            // exit;
                include "views/newPost.php";
            } else {
                include "views/login.php";
            }
        }

        private function viewPost(){
            include "views/posts.php";
        }

        private function cadastroPost(){    
            $post = new Post();
            $descricao = $_POST['descricao'];
            $nomeArquivo = $_FILES['img']['name'];
            $linkTemp = $_FILES['img']['tmp_name'];
            $caminhoSalvo = "views/img/$nomeArquivo";           
            //vai salvar as imagens na view.

            move_uploaded_file($linkTemp, $caminhoSalvo);       
            //salvamos o arquivo.

            $usuarioLogadoId = $_SESSION['usuarioId'][0];
            // var_dump($usuarioLogadoId); ESTÁ DEVOLVENDO NULL
            // exit;
            //cria um objeto pra armazenar a session de usuario logado. O id está na posição 0
            

            $resultado = $post->criarPost($caminhoSalvo, $descricao, $usuarioLogadoId);

            if($resultado){
                header('Location:/fake-insta/posts');           
                //tá redirecionando pros posts.
            } else {
                echo "Não foi possível carregar a sua foto.";
            }
        }

        private function listarPosts(){
            $post = new Post();
            $listaPosts = $post->listarPosts();
            $_REQUEST['posts'] = $listaPosts;    
            //a lista de posts vai pra dentro da super global request. A view recebe essas informações.
            $this->viewPost();
        }

        
    }