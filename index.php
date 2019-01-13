<?php 
session_start();
 
require 'conexao.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>KASSEL</title>
</head>
<body>
    <div></div>


    <?php if (isLoggedIn()): ?>
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="index.php"><img src="icones/home.png"></a></li>
            <li role="presentation"><a href="cadastro.php">Cadastrar</a></li>
            <li role="presentation"><a href="listarProduto.php">Estoque</a></li>
            <li role="presentation"><a href="registroVendas.php">Vendas</a></li>
            <li role="presentation"><a href="logout.php">SAIR</a></li>
        </ul>
        <?php else: ?>
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="loginform.php">Acessar</a></li>
            </ul>
        <?php endif; ?>


        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <center><img class="first-slide" src="imagens/logo.jpg" alt="First slide"></center>
                    <div class="container">
                        <div class="carousel-caption"> 

                        </div>
                    </div>
                </div>
                <div class="item">
                    <center><img class="second-slide" src="imagens/loja.jpg" alt="Second slide"></center>
                    <div class="container">
                        <div class="carousel-caption">

                        </div>
                    </div>
                </div>
                <div class="item">
                    <center><img class="third-slide" src="imagens/lojadentro.jpg" alt="Third slide"></center>
                </div>
            </div>
            <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Próximo</span>
            </a>
        </div>

    </body>

    </html>
