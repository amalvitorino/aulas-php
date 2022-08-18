<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
</head>

<body>


    <?php



    if (isset($_POST['btnEnviar'])) :

        $quantidade = count($_FILES['arquivo']['name']);

        //var_dump($_FILES);
        $formatosPermitidos = ['png', 'jpeg', 'jpg', 'gif'];

        for ($i = 0; $i < $quantidade; $i++) {
            # code...

            $extensao = pathinfo($_FILES['arquivo']['name'][$i], PATHINFO_EXTENSION);

            if (in_array($extensao, $formatosPermitidos)) {
                $pasta = "arquivos/";
                $temporario = $_FILES['arquivo']['tmp_name'][$i];
                $novoNome = uniqid() . ".$extensao";

                if (move_uploaded_file($temporario, $pasta . $novoNome)) {
                     echo "Upload feito com sucesso! para $pasta $novoNome <br>";
                 } else {
                    echo "nao foi possivel fazer o uplload <br>";
                 }
            } else {
                echo "o formato $extensao, nao eh permitido <br>";
            }
        }

    endif;

    ?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo[]" required multiple>
        <button type="submit" name="btnEnviar">Enviar</button>
    </form>
</body>

</html>