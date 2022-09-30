<?php
$dbserver = 'localhost';
$dbuser = 'root';
$dbpassword = '';
$dbname = 'gabriel';



$conexao = mysqli_connect($dbserver, $dbuser, $dbpassword, $dbname,);

//teste conexao
/*
if ($conexao->connect_errno) {
    echo 'conexao ok!';
} else {
    echo 'falha de conexao';
}
*/