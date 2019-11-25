<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Novo Usuário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="views/css/styles.css">
</head>
<body>
<!--Fomrulário para cadastro de novo Usuário-->
    <?php include "includes/header.php"; ?>
    <main class="board">
        <h1> Cadastro de novo Usuário </h1>
        <form action="/fake-insta/cadastrar-usuario" method="POST" enctype="multipart/form-data"> <!-- atualizamos o formulário com os métodos de envio -->
            <div class="form-group">
                <label for="nome">Nome de Usuário</label>
                <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome de usuário">
            </div>
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="Insira seu e-mail">
            </div>
            <div class="form-group">
                <label for="senha">Digite sua senha</label>
                <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua senha">
            </div>
            <div class="form-group">
                <label for="foto">Foto de Usuário</label>
                <input type="file" class="form-control-file" name="profile_picture" id="imgUsuario">
            </div>
            <button type="submit" class="btn btn-success">Cadastrar</button>
        </form>

    </main>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>