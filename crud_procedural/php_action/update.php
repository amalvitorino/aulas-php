<?php
//conexao
include_once 'db_connect.php';

session_start();

if(isset($_POST['btn_editar'])){
    $nome = mysqli_escape_string($conexao,$_POST['nome']);
    $apelido = mysqli_escape_string($conexao,$_POST['apelido']);
    $data_nascimento = mysqli_escape_string($conexao,$_POST['data_nascimento']);
    $email = mysqli_escape_string($conexao,$_POST['email']);
    $id = mysqli_escape_string($conexao,$_POST['id']);

    $sql = "UPDATE `alunos` SET `nome` = '$nome', `apelido` = '$apelido', `data_nascimento` = '$data_nascimento', `email` = '$email' WHERE `alunos`.`id` = $id";


    if(mysqli_query($conexao,$sql)){
        $_SESSION['mensagem'] = "Dados do Aluno editados com sucesso!";
        header('location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao editar!";
        header('location: ../index.php');
    }
}