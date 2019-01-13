<?php
 
require_once 'conexao.php';
 
if (!isLoggedIn())
{
    header('Location: loginform.php');
}