<?php


include_once './conexao.php';

$nomeProduto = $_POST ['nomeProduto'];
$precoProduto = $_POST ['precoProduto'];
$marca = $_POST ['marca'];
$quantidade = $_POST ['quantidade'];


$PDO = conexao();
$sql = "INSERT INTO produto (nomeProduto, precoProduto , marca , quantidade) VALUES (:nomeProduto,:precoProduto,:marca,:quantidade)";
$exe = $PDO->prepare($sql);
$exe->bindParam(':nomeProduto', $nomeProduto);
$exe->bindParam(':precoProduto', $precoProduto);
$exe->bindParam(':marca', $marca);
$exe->bindParam(':quantidade', $quantidade);



if ($exe->execute()) {
    echo "<script>alert('Dados gravados com sucesso!'); location.href = 'listarProduto.php';</script>";
} else {
    
    echo "<script>alert('Erro na gravação dos dados!'); location.href = 'listarProduto.php';</script>";
}
    
        
         