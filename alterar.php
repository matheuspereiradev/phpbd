<?php

include_once './conexao.php';

$idProduto = $_POST ['idProduto'];
$nomeProduto = $_POST ['nomeProduto'];
$precoProduto = $_POST ['precoProduto'];
$marca = $_POST ['marca'];

$PDO = conexao();
$sql = "UPDATE produto SET nomeProduto = :nomeProduto, precoProduto = :precoProduto, marca = :marca WHERE idProduto = :idProduto";
$exe = $PDO->prepare($sql);
$exe->bindParam(':nomeProduto', $nomeProduto);
$exe->bindParam(':precoProduto', $precoProduto);
$exe->bindParam(':marca', $marca);
$exe->bindParam(':idProduto', $idProduto);


if ($exe->execute()){
    echo "<script>alert('Salvo com sucesso!'); location.href = 'listarProduto.php';</script>";
}else{
    echo "<script>alert('Erro na alterações!'); location.href = 'listarProduto.php';</script>";
}