<?php

include_once "Conexao.php";

    class Usuario extends Conexao{

        public function criarUsuario($nome, $email, $senha, $profile_picture){
            $db = parent::criarConexao();
            $query = $db->prepare("INSERT INTO usuarios (nome, email, senha, profile_picture) values (?,?,?,?)");
            return $query->execute([$nome, $email, $senha, $profile_picture]);
        }
    }