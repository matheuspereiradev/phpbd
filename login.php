<?php
 
require 'conexao.php';

$login = $_POST ['login'];
$password = $_POST ['password'];
$passwordHash = md5($password);
$PDO = conexao();
 
$sql = "SELECT id,nome FROM funcionario WHERE login = :login AND senha = :password";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':login', $login);
$stmt->bindParam(':password', $passwordHash);
 
$stmt->execute();
 
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
 
if (count($users) <= 0)
{
    echo "<script>alert('Login ou senha incorretos!'); location.href = 'index.php';</script>";
    exit;
}

$user = $users[0];
 
session_start();
$_SESSION['logged_in'] = true;
$_SESSION['id'] = $user['id'];
$_SESSION['nome'] = $user['nome'];
 
header('Location: index.php');