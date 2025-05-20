<?php
$usuario = 'root';
$senha = ' ';
$database = 'nota+';
$host = 'localhost';

$conexao = new PDO($host,$user,$password,$database);

if($conexao->error){
    die("Falha na conexão: " . $conexao->error );
}
?>