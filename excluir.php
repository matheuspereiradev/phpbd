<?php


include_once './conexao.php';

$idProduto = $_GET ['idProduto'];

$PDO = conexao();
$sql = "DELETE FROM produto WHERE idProduto = :idProduto";
$exe = $PDO->prepare($sql);
$exe->bindParam(':idProduto', $idProduto);



if ($exe->execute()) {
    echo "<script>alert('Registro excluido com sucesso!'); location.href = 'listarProduto.php';</script>";
} else {
    echo "<script>alert('Erro na exclusao do registro!'); location.href = 'listarProduto.php';</script>";
}

mysql_close();
    