<?php
session_start();

$usuarios = $_REQUEST['usuarios'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Usuários</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
</head>
<body>
    <main class="board">
    <?php foreach($usuarios as $usuario): ?>
        <div class="mt-5">
            <img id="imgUsuario" src="<?php echo $usuario->profile_picture; ?>" alt="Imagem do Usuário">
            <div class="">
                <p class=""><?php echo $usuario->nome; ?></p>
            </div>
        </div>
        <?php endforeach; ?>
    </main>
    
</body>
</html>