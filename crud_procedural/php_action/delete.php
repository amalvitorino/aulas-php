<?php
//conexao
include_once 'db_connect.php';

session_start();

if(isset($_POST['btn_deletar'])){

    $id = mysqli_escape_string($conexao,$_POST['id']);

    $sql = "DELETE FROM `alunos` WHERE `alunos`.`id` = $id";


    if(mysqli_query($conexao,$sql)){
        $_SESSION['mensagem'] = "Registo deletado com sucesso!";
        header('location: ../index.php');
    }else{
        $_SESSION['mensagem'] = "Erro ao deletar registo!";
        header('location: ../index.php');
    }
}