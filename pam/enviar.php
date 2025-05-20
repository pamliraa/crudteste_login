<?php
include_once('conexao.php');

if(isset($_POST['user']) || isset($_POST['password'])){
    if(strlen($_POST['user']) == 0){
        echo 'Preencha esse campo';
    }
    else if (strlen($_POST['password']) == 0){
        echo 'Preencha esse campo';
    }
    else{
        $user = $conexao->real_escape_string($_POST[$user]);
        $password = $conexao->real_escape_string($_POST[$password]);

        $sql_code = "SELECT * FROM login WHERE user = '$user' AND password = '$password'";
        $sql_query = $conexao ->query($sql_code) or die("Falha na execução do código sql: " . $conexao->error); 
    }
}
?>