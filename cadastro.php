<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
session_start();

require_once 'conexao.php';

require 'check.php';
?>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>CADASTRO</title>
</head>
<body>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="index.php"><img src="icones/home.png"></a></li>
        <li role="presentation"><a href="cadastro.php">Cadastrar</a></li>
        <li role="presentation"><a href="listarProduto.php">Estoque</a></li>
        <li role="presentation"><a href="registroVendas.php">Vendas</a></li>
        <li role="presentation"><a href="logout.php">SAIR</a></li>

    </ul>
    <div align="center">CADASTRO DE PRODUTO</div>
    <hr>
    <form action="salvar.php" method="post"align="center" >
        <div>
            Nome do produto:<br>
            <input type="text" name="nomeProduto" required placeholder="Nome do produto" maxlength="40"><br><br>
        </div>
        <div>
            Preço do produto:<br>
            <input type="text" name="precoProduto" required placeholder="Preço do produto"  maxlength="7" ><br><br>
        </div>
        <div>
            Marca:<br>        
            <input type="text" name="marca" required placeholder="Marca" maxlength="20"><br><br>
        </div>

        <div>
            <input type="hidden" name="quantidade" value="0">

        </div>
        <div class="btn-group" role="group" aria-label="...">
            <button type="submit" class="btn btn-default" align="center" >Salvar</button>
        </div>

    </div>

</form>

</body>
</html>
