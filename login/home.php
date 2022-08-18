<?php

include 'conexao.php'; //trazendo a conexao para esta pagina
//sessao
session_start();

//verificacao
if(!isset($_SESSION['logado'])){
    header('location:index.php');
}

//dados
$id = $_SESSION['user_id'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$dados = mysqli_fetch_array(mysqli_query($conexao,$sql));
mysqli_close($conexao); //fechando a conexao
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>Olá <?php echo $dados['nome'] ?>! </h1>
    <a href="index.php">voltar</a>
    <a href="logout.php">sair</a>
</body>

</html>