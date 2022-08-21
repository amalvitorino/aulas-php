<?php
//conexao
include_once 'db_connect.php';

session_start();

function clear($input){
    global $conexao;
    //sql
    $var = mysqli_escape_string($conexao,$input);
    //xss
    $var = htmlspecialchars($var);
    return $var;
}

if(isset($_POST['btn_editar'])){
    $nome = clear($_POST['nome']);
    $apelido = clear($_POST['apelido']);
    $data_nascimento = clear($_POST['data_nascimento']);
    $email = clear($_POST['email']);
    $id = clear($_POST['id']);

    $sql = "UPDATE `alunos` SET `nome` = '$nome', `apelido` = '$apelido', `data_nascimento` = '$data_nascimento', `email` = '$email' WHERE `alunos`.`id` = $id";


    if(mysqli_query($conexao,$sql)){
        $_SESSION['mensagem'] = "Dados do Aluno editados com sucesso!";
        header('location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao editar!";
        header('location: ../index.php');
    }
}