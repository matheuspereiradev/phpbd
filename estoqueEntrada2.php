<?php

include_once './conexao.php';

$idProduto = $_POST ['idProduto'];
$quantidade = $_POST ['quantidade'];
$quantidadeAntiga= $_POST ['quantidadeAntiga'];
$total=$quantidadeAntiga+$quantidade;


$PDO = conexao();
$sql = "UPDATE produto SET quantidade=:total WHERE idProduto=:idProduto";
$exe = $PDO->prepare($sql);
$exe->bindParam(':total', $total);
$exe->bindParam(':idProduto', $idProduto);


    
if ($exe->execute()){
    echo "<script>alert('Dados alterados com sucesso!'); location.href = 'listarProduto.php';</script>";
}else{
    echo "<script>alert('Erro na alteração dos dados!'); location.href = 'listarProduto.php';</script>";
}