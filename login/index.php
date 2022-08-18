<!--SCRIPT PHP--->
<?php
include "conexao.php"; //incluindo a conexao neste documento

//sessao
session_start();


if (isset($_POST['btnEntrar'])) {

    $user = mysqli_escape_string($conexao, $_POST['user']);
    $password = md5(mysqli_escape_string($conexao, $_POST['password']));

    if (empty($user) or empty($password)) {
        echo "<script>alert('Erro!! preecha todos os campos');</script>";
    } else {

        $sql = "SELECT * FROM `usuarios` WHERE `user` LIKE '$user' AND `senha` LIKE '$password'";
        $reultadoExecucao = mysqli_query($conexao, $sql);
        if (mysqli_num_rows($reultadoExecucao) > 0) {
            $dados = mysqli_fetch_array($reultadoExecucao);
            $_SESSION['logado'] = true;
            $_SESSION['user_id'] = $dados['id'];
            $_SESSION['nome'] = $dados['nome'];
            header('Location:home.php');
        } else {
            echo "<script>alert('Erro!! user ou password incorretos');</script>";
        }
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
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="">User</label><br>
        <input type="text" name="user" id="user"><br>
        <label for="">Password</label><br>
        <input type="password" name="password" id="password"><br>
        <input type="submit" value="Entrar" name="btnEntrar">
        <a href="cadastro.php">Criar conta</a>
    </form>
</body>

</html>