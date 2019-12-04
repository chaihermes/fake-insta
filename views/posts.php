<?php 
$posts = $_REQUEST['posts']; 
//var_dump($posts); //NOME E FOTO ESTÃO VINDO COMO NULL
//exit;       

$usuarioId = isset($_SESSION['usuarioId'])? $_SESSION['usuarioId'][0]:[];
// var_dump($usuarioId); ESTÁ RETORNANDO 1, COMO SE O USUARIO DE ID 1 ESTIVESSE LOGADO.
// exit;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
</head>
<body>
    
    <?php include "includes/header.php"; ?>
    <main class="board">
    <?php foreach($posts as $post): ?>
        <div class="cardTotal card mt-5">
            <!--Inclusão de foto e nome do usuário antes do post-->
            <div class="row">
                <img id="profile_picture" src="<?php echo $post->profile_picture;?>" alt="ImagemPerfilUsuario">
                <h4 id="nomeUsuario"><?php echo $post->nome;?></h4>
            </div>
            <!--Imagem e descrição do post-->
            <div class="card">
                <img id="cardimg" src="<?php echo $post->img; ?>" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text"><?php echo $post->descricao; ?></p>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
        <a class="float-button" href="/fake-insta/formulario-post">&#10010;</a>
    </main>
    



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>