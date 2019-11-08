<?php

    $rotas = key($_GET)?key($_GET):"posts"; //verifica se o usuário digitou algo na url ou não. Se não, já manda direto pra página posts.
    switch($rotas){      //qual controller vai usar
        case "posts":
            include "controllers/PostController.php";   //as classes devem ser no singular
            $controller = new PostController();
            $controller->acao($rotas);          //pra acessar algo é sempre com seta magra
        break;

        case "formulario-post":
            include "controllers/PostController.php";   //as classes devem ser no singular
            $controller = new PostController();
            $controller->acao($rotas);          //pra acessar algo é sempre com seta magra
        break;

    }