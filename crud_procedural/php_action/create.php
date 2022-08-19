<?php
//conexao
include_once 'db_connect.php';

session_start();

if(isset($_POST['btn_registar'])){
    $nome = mysqli_escape_string($conexao,$_POST['nome']);
    $apelido = mysqli_escape_string($conexao,$_POST['apelido']);
    $data_nascimento = mysqli_escape_string($conexao,$_POST['data_nascimento']);
    $email = mysqli_escape_string($conexao,$_POST['email']);

    $sql = "INSERT INTO `alunos`(`nome`, `apelido`, `data_nascimento`, `email`) VALUES ('$nome','$apelido','$data_nascimento','$email')";


    if(mysqli_query($conexao,$sql)){
        $_SESSION['mensagem'] = "Registado com sucesso!";
        header('location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao registar!";
        header('location: ../index.php');
    }
}