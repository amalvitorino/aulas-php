<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>

<body>
    usando metodo post
    <form action="dados.php" method="post">
        nome: <input type="text" name="nome">
        email: <input type="email" name="email">
        <button type="submit">enviar</button>
    </form>

    <hr>

    <a href="dados.php?produto=amendoim&valor=500">comprar</a>
</body>

</html>