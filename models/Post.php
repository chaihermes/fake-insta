<?php

include_once "Conexao.php";

    class Post extends Conexao{
       
        public function criarPost($imagem, $descricao, $usuarioLogadoId){
            $db = parent::criarConexao();      //está buscando a conexão dentro da classe pai.
            $query = $db->prepare("INSERT INTO posts (img, descricao, usuarios_id) values (?,?,?)");
            return $query->execute([$imagem, $descricao, $usuarioLogadoId]);
        }

        public function listarPosts(){
            $db = parent::criarConexao(); 
            $query = $db->query('SELECT posts.id, posts.img, posts.descricao, usuarios.nome, usuarios.profile_picture FROM posts LEFT JOIN usuarios ON posts.usuarios_id = usuarios.id ORDER BY posts.id DESC'); //posts é o nome da tabela. A função query meio que faz o prepare e o execute juntos   ORDER BY altera a ordem que aparece na timeline.
            $resultado = $query->fetchAll(PDO::FETCH_OBJ);   //fetchAll traduz pro php. FETCH_OBJ retorna uma lista de objetos, ele transforma cada coluna em um atributo de objeto, diferentemente do ASSOC que retorna um array associativo.  Precisa acessar com seta.
            return $resultado; //o model gera a lista e manda pra quem for usar. Geralmente pro controller.
        }
    }


    //no model ele só cadastra no banco de  dados. Apenas.