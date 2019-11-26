<?php

include_once "Conexao.php";

    class Login extends Conexao{
        public function autenticarUsuario($email, $senha){
            $db = parent::criarConexao();      
            $query = $db->prepare("SELECT * FROM usuarios WHERE email=? AND senha=?");
            $query->execute([$email, $senha]);

            //verificação se a query deu certo. Se ela deu certo, for diferente de false, o resultado da query é transformada pelo fetchAll em array associativo.
            if($query != false){
                $resultadoLogin = $query->fetchAll(PDO::FETCH_ASSOC);
            }
            return $resultadoLogin;
        }
    }
 ?>