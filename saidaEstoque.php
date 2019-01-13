<?php


include_once './conexao.php';

$idProduto = $_POST ['idProduto'];
$quantidade = $_POST ['quantidade'];
$quantidadeAntiga = $_POST ['quantidadeAntiga'];
$total = $quantidadeAntiga - $quantidade;
$cpf=$_POST['cpf'];
$dataNascimento=$_POST['dataNascimento'];
$dataVenda=$_POST['dataVenda'];
$telefone=$_POST['telefone'];
$nomeCliente = $_POST ['nomeCliente'];

$PDO = conexao();
$sql = "UPDATE produto SET quantidade=:total WHERE idProduto=:idProduto";
$exe = $PDO->prepare($sql);
$exe->bindParam(':total', $total);
$exe->bindParam(':idProduto', $idProduto);

$sql2 = "INSERT INTO venda (codProduto, nomeCliente,quantidade, cpf, dataNascimento, dataVenda, telefone) values (:idProduto, :nomeCliente, :quantidade, :cpf, :dataNascimento, :dataVenda, :telefone)";
$exe2 = $PDO->prepare($sql2);
$exe2->bindParam(':idProduto', $idProduto);
$exe2->bindParam(':nomeCliente', $nomeCliente);
$exe2->bindParam(':quantidade', $quantidade);
$exe2->bindParam(':cpf', $cpf);
$exe2->bindParam(':dataNascimento', $dataNascimento);
$exe2->bindParam(':dataVenda', $dataVenda);
$exe2->bindParam(':telefone', $telefone);


if ($exe->execute()&&$exe2->execute()) {
    echo "<script>alert('Venda relizada com sucesso!'); location.href = 'listarProduto.php';</script>";
} else {
    echo "<script>alert('Erro na venda!'); location.href = 'listarProduto.php';</script>";
}