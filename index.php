<?php

    $rotas = key($_GET)?key($_GET):"posts"; //verifica se o usuário digitou algo na url ou não. Se não, já manda direto pra página posts.
    switch($rotas){      //qual controller vai usar
        case "posts":
            include "controllers/PostController.php";   
            $controller = new PostController();     //cria o objeto
            $controller->acao($rotas);          
        break;

        case "formulario-post":
            include "controllers/PostController.php";   
            $controller = new PostController();
            $controller->acao($rotas);          
        break;

        case "cadastrar-post":
            include "controllers/PostController.php";
            $controller = new PostController();
            $controller->acao($rotas);
        break;

        case "formulario-usuario":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
            
        case "cadastrar-usuario":
            include "controllers/UsuarioController.php";
            $controller = new UsuarioController();
            $controller->acao($rotas);
        break;
        
        case "form-login":
            include "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->acao($rotas);
        break;

        case "autenticar-login":
            include "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->acao($rotas);
        break;

        case "logout":
            include "controllers/LoginController.php";
            $controller = new LoginController();
            $controller->acao($rotas);
        break;
    }
    //Cria o caminho (rota) para o que foi digitado na URL pelo usuário. Aqui, pega o que foi digitado e envia para o controller, ele que vai dizer o que fazer com essa informação.