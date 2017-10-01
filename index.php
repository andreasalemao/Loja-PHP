<?php
require_once('./dados/ini.php');
require_once('./dados/get.php');
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

        <!-- CSS -->
        <link href="<?php setHome(); ?>/theme/css/bootstrap.css" rel="stylesheet">
        <link href="<?php setHome(); ?>/theme/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php setHome(); ?>/theme/css/bootstrap.theme.css" rel="stylesheet">
        <link href="<?php setHome(); ?>/theme/css/bootstrap.theme.min.css" rel="stylesheet">

    </head>

    <body>

        <div class="contanier-fluid">

            <!-- Menu do site -->
            <ul class="nav nav-pills">
                <li role="presentation"><a href="<?php setHome(); ?>">Home</a></li>
                <li role="presentation"><a href="<?php setHome(); ?>/pagina/produto">Painel</a></li>
                <li role="presentation"><a href="<?php setPainel(); ?>">Painel</a></li>
                <li role="presentation"><a href="<?php setPainel(); ?>/login">Vazio</a></li> 
            </ul>

            <!-- Conteudo do site será exibido dentro da função (getHome) assim não será necessário carregar todo o site apenas o conteúdo que será exibido acelerando a navegação. -->
            <?php getHome(); ?>

        </div>

    </body>
</html>
