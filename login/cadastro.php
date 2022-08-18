<!--SCRIPT PHP--->
<?php
include "conexao.php"; //incluindo a conexao neste documento

if (isset($_POST['btnCadastrar'])) {
    $user = $_POST['user'];
    $nome = $_POST['nome'];
    $password = md5($_POST['password']);

    $sql = "INSERT INTO `usuarios`(`nome`, `user`, `senha`) VALUES ('$nome','$user','$password')";


    if (mysqli_query($conexao, $sql)) {
        echo "<script>alert('user Cadastrado com sucesso!');</script>";
        header('location:index.php');
    } else {
        echo "<script>alert('Erro!! Algo deu errado');</script>";
    }
}

?>

<!--CODIGO HTML--->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <br>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="">Nome</label><br>
        <input type="text" name="nome" id="user" placeholder="nome"><br>
        <label for="">User</label><br>
        <input type="text" name="user" id="user" placeholder="user name"><br>
        <label for="">Password</label><br>
        <input type="password" name="password" id="password" placeholder="Password"><br>
        <input type="submit" value="Registar" name="btnCadastrar">
        <a href="cadastro.php">Criar conta</a>
    </form>
</body>

</html>