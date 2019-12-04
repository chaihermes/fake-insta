<?php
$perfilLogado = isset($_SESSION['usuarioNome'])? $_SESSION['usuarioNome'][0]:[];
//iniciando a sessão do usuário com o seu nome.
?>


<header>
        <nav class="navbar topo-instagran ">
            <div class="justify-content-center">
                <a class="navbar-brand " href="/fake-insta/posts"><img width="90" src="views/img/logo.png" alt="" srcset="">No Mundo</a>
            </div>
            <!--Se o usuário estiver logado, aparece o nome e a foto de perfil-->

            <div class="navbar justify-content-end">
                <?php if($perfilLogado){ ?>
                <ul class="nav">
                    <li class="logado"><?php echo "Olá, ".$perfilLogado;?> </li>
                    <li class=""><a class="nav-link" href="/fake-insta/logout">Sair</a></li>
                    <?php } else { ?>
                    <li class="nav-link"><a class="nav-link" href="/fake-insta/formulario-usuario">Cadastrar</a></li>
                    <li class="nav-link"><a class="nav-link" href="/fake-insta/form-login">Login</a></li>
                    <?php } ?>
                </ul>
            </div>
        </nav>
</header>