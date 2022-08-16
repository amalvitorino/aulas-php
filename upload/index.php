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

if(isset($_POST['btnEnviar'])):
    //var_dump($_FILES);
    $formatosPermitidos = ['png','jpeg','jpg','gif'];
    $extensao = pathinfo($_FILES['arquivo']['name'],PATHINFO_EXTENSION);

    if(in_array($extensao,$formatosPermitidos)){
        $pasta = "arquivos/";
        $temporario = $_FILES['arquivo']['tmp_name'];
        $novoNome = uniqid().".$extensao";

        if(move_uploaded_file($temporario, $pasta.$novoNome)){
            $messagem = "Upload feito com sucesso!";
        }else{
            $messagem = "nao foi possivel fazer o uplload";
        }
    }else{
        $messagem = "o formato $extensao, nao eh permitido";
    }

    echo $messagem;
endif;

?>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
    <input type="file" name="arquivo" id="">
    <button type="submit" name="btnEnviar">Enviar</button>
    </form>
</body>
 
</html>