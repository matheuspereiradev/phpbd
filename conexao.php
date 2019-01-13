<?php

function conexao()
{
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco = "kassel";
	$PDO = new PDO('mysql:host=' . $servidor . ';dbname=' . $banco . ';charset=utf8', $usuario, $senha);

	return $PDO;
}

function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true)
    {
        return false;
    }
 
    return true;
}

function data($date)
{
    if ( ! strstr( $date, '/' ) )
    {
        sscanf($date, '%d-%d-%d', $y, $m, $d);
        return sprintf('%02d/%02d/%04d', $d, $m, $y);
    }
    else
    {
        sscanf($date, '%d/%d/%d', $d, $m, $y);
        return sprintf('%04d-%02d-%02d', $y, $m, $d);
    }
 
    return false;
}