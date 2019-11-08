<?php
    class  PostController {
        public function acao($rotas){
            switch($rotas){   //qual ação vai tomar. O que fazer com a informação que o usuário que me deu.
                case "posts":
                    echo "Página dos Posts";
                break;
                case "formulario-post":
                    echo "Página de Cadastro do post";
                break;
            }                  
        }
    }