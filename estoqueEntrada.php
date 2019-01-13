
<html>

<?php
session_start();
 
require_once 'conexao.php';
 
require 'check.php';

$idProduto = $_GET['idProduto'];

$PDO = conexao();
$sql = "SELECT * FROM produto WHERE idProduto = :idProduto";
$exe = $PDO->prepare($sql);
$exe->bindParam(':idProduto', $idProduto);
$exe->execute();

?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <title>REALIZAR ENTRADA DE PRODUTO</title>

</head>
<body>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="index.php"><img src="icones/home.png"></a></li>
        <li role="presentation"><a href="cadastro.php">Cadastrar</a></li>
        <li role="presentation"><a href="listarProduto.php">Estoque</a></li>
        <li role="presentation"><a href="registroVendas.php">Vendas</a></li>
        <li role="presentation"><a href="logout.php">SAIR</a></li>

    </ul>
    
    <div align="center" >REALIZAR ENTRADA DE PRODUTO</div>
    <hr>
    <center><form action="estoqueEntrada2.php" method="post">
        <?php while ($produto = $exe->fetch(PDO::FETCH_ASSOC)) { ?>
            <input type="hidden" name="idProduto" value="<?php echo $produto['idProduto']; ?>">
            <input type="hidden" name="quantidadeAntiga" value="<?php echo $produto['quantidade']; ?>">
            <div>
                Quantidade de produtos inserida:<br>
                <input type="number" name="quantidade" required placeholder="quantidade" min="1"><br><br>
            </div>

            <div class="btn-group" role="group" aria-label="...">
                <button type="submit" class="btn btn-default" align="center" >Salvar</button>
            </div>
        <?php } ?>
    </form></center>
</body>
</html>
