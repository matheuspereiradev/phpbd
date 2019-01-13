<!DOCTYPE html>
<?php
session_start();
 
require_once 'conexao.php';
 
require 'check.php';

$PDO = conexao();
$sql = "SELECT * FROM produto";     /* Vai pegar o nome de todos os clientes e aramazenar na variavel $sql */
$exe = $PDO->prepare($sql);
$exe->execute();
?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>Estoque</title>
    <script>
        function excluirProduto(idProduto) {
            if (confirm('Deseja exluir o registro?')) {
                location.href = 'excluir.php?idProduto=' + idProduto;
            }
        }
    </script>
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
    <table align="center" border="2" width="80%">
        <thead>
            <th><center>CÓDIGO</center></th>
            <th><center>NOME</center></th>
            <th><center>MARCA</center></th>
            <th><center>PREÇO</center></th>
            <th><center>QUANTIDADE</center></th>
            <th><center>ALTERAR</center></th>
            <th><center>EXCLUIR</center></th>
            <th><center>ENTRADA</center></th>
            <th><center>VENDER</center></th>
            <th><center>SITUAÇÃO
                <div class="btn-group" role="group">
                    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img src="icones/info.png">
                        <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <li><img src="icones/3peq.png">Existem mais de 200 itens no estoque</li>
                        <li><img src="icones/2peq.png">Existem entre 50 e 200 itens no estoque</li>
                        <li><img src="icones/1peq.png">Existem menos de 50 itens no estoque</li>
                    </ul>
                </div>
            </center>
        </th>

    </thead>
    <tbody>
        <?php while ($produto = $exe->fetch(PDO::FETCH_ASSOC)) { ?> 
            <tr>
                <td><center><?php echo $produto['idProduto']; ?></center></td>
                <td><center><?php echo $produto['nomeProduto']; ?></center></td>
                <td><center><?php echo $produto['marca']; ?></center></td>
                <td><center><?php echo $produto['precoProduto']; ?></center></td>
                <td><center><?php echo $produto['quantidade']; ?></center></td>
                <td class="centro"><a href="alterarProduto.php?idProduto=<?php echo $produto['idProduto']; ?>"><center><img src="icones/editar.png"></center></a></td>
                <td class="centro"><a href="javascript:func()" onclick="excluirProduto(<?php echo $produto['idProduto']; ?>)"><center><img src="icones/delete.png"></center></a></td>
                <td class="centro"><a href="estoqueEntrada.php?idProduto=<?php echo $produto['idProduto']; ?>"><center><img src="icones/estoque.png"></center></a></td>
                <td class="centro"><a href="saidaEstoque2.php?idProduto=<?php echo $produto['idProduto']; ?>"><center><img src="icones/venda.png"></center></a></td>
                <td><center>
                    <?php
                    if ($produto['quantidade'] < 50) {
                        echo '<img src="icones/1.png">';
                    } elseif (($produto['quantidade'] > 50)and ( $produto['quantidade'] < 200)) {
                        echo '<img src="icones/2.png">';
                    } else {
                        echo '<img src="icones/3.png">';
                    }
                    ?></center></td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
