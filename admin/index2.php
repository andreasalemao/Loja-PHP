<?php
require_once('./../dados/ini.php');
require_once('./../dados/get.php');
?>
<!-- Arquivo raiz -->

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="<?php setPainel(); ?>/favicon.ico">

        <title><?php siteNome(); ?></title>

        <!-- Bootstrap core CSS -->
        <link href="<?php setPainel(); ?>../css/bootstrap.css" rel="stylesheet">
        <link href="<?php setPainel(); ?>../css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom styles for this template -->
        <link href="<?php setPainel(); ?>../css/dashboard.css" rel="stylesheet">

    </head>

    <body>

        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php setPainel(); ?>/pagina/">Nome da Loja</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="<?php setPainel(); ?>">Visualizar Site</a></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li><a href="<?php setPainel(); ?>/cliente">Clientes</a></li>
                        <li><a href="<?php setPainel(); ?>/admin/cliente">Produtos</a></li>
                        <li><a href="<?php setPainel(); ?>/pagina/cliente">Cadastrar Produtos</a></li>
                        <li><a href="<?php setPainel(); ?>/admin/pagina/cliente">Teste Produtos</a></li>
                    </ul>
                </div>
            </div>
        </div>


        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">

            <!-- Conteudo do site será exibido dentro da função (getPainel) assim não será necessário carregar todo o site apenas o conteúdo que será exibido acelerando a navegação. -->
            <?php getPainel(); ?>

        </div>

    </body>
</html>
