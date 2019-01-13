<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<?php
session_start();
 
require_once 'conexao.php';
 
require 'check.php';

$PDO = conexao();
$sql = "SELECT * FROM venda";
$exe = $PDO->prepare($sql);
$exe->execute();

?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Vendas</title>

</head>
<body>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="index.php"><img src="icones/home.png"></a></li>
        <li role="presentation"><a href="cadastro.php">Cadastrar</a></li>
        <li role="presentation"><a href="listarProduto.php">Estoque</a></li>
        <li role="presentation"><a href="registroVendas.php">Vendas</a></li>
        <li role="presentation"><a href="logout.php">SAIR</a></li>
    </ul>

    <div align="center">LISTA DE PRODUTOS</div>
    <hr>
    <table align="center" border="2" width="85%">
        <thead>
            <th><center>CÓDIGO DA VENDA</center></th>
            <th><center>DATA VENDA</center></th>
            <th><center>NOME DO CLIENTE</center></th>
            <th><center>CPF</center></th>
            <th><center>DATA DE NASCIMENTO</center></th>
            <th><center>TELEFONE</center></th>
            <th><center>CODIGO DO PRODUTO</center></th>
            <th><center>QUANTIDADE</center></th>


        </thead>
        <tbody>
            <?php while ($produto = $exe->fetch(PDO::FETCH_ASSOC)) { ?> 
                <tr>
                    <td><center><?php echo $produto['idVenda']; ?></center></td>
                    <td><center><?php echo data($produto['dataVenda']); ?></center></td>
                    <td><center><?php echo $produto['nomeCliente']; ?></center></td>
                    <td><center><?php echo $produto['cpf']; ?></center></td>
                    <td><center><?php echo data($produto['dataNascimento']); ?></center></td>
                    <td><center><?php echo $produto['telefone']; ?></center></td>
                    <td><center><?php echo $produto['codProduto']; ?></center></td>
                    <td><center><?php echo $produto['quantidade']; ?></center></td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
