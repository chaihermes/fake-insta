<?php 
    class Conexao{              //criando a conexão com o banco de dados.
        private $host = 'mysql:host=localhost;dbname=instagram;port=3306';
        private $user = 'root';
        private $password = '';

        //criando o método:
        protected function criarConexao(){
            return new PDO($this->host, $this->user, $this->password);   //conectando o banco de dados. Retorna a conexão pra quem for usar.
        }
    }

