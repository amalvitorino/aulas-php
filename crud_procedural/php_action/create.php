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

if(isset($_POST['btn_registar'])){
    $nome = clear($_POST['nome']);
    $apelido = clear($_POST['apelido']);
    $data_nascimento = clear($_POST['data_nascimento']);
    $email = clear($_POST['email']);

    $sql = "INSERT INTO `alunos`(`nome`, `apelido`, `data_nascimento`, `email`) VALUES ('$nome','$apelido','$data_nascimento','$email')";


    if(mysqli_query($conexao,$sql)){
        $_SESSION['mensagem'] = "Registado com sucesso!";
        header('location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao registar!";
        header('location: ../index.php');
    }
}