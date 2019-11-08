<?php

include_once "Conexao.php";

    class Post extends Conexao{
        public function criarPost($imagem, $descricao){
            $db = parent::criarConexao();       //está buscando a conexão dentro da classe pai.
            $query = $db->prepare("INSERT INTO posts (imagem, descricao) values (?,?)");
            return $query->execute([$imagem, $descricao]);
        }
    }


    //no model ele só cadastra no banco de  dados. Apenas.