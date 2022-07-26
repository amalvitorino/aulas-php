<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial</title>
</head>

<body>

    <?php
    /** Validacoes
     * funcoes (filter_input E FILTER_VAR)
     * FILTER_VALIDARE_INT
     * FILTER_VALDATE_EMAIL
     * FILTER_VALIDATE_FLOATE
     * FILTER_VALIDATE_IP
     * FILTER_VALIDATE_URL
     */

    //TRABALHANDO COM FILTERS

        if(isset($_POST['btn-enviar'])){
            $erros = []; //arrays de erros

            $nome = $_POST['nome'];
            $idade = $_POST['idade'];
            $email = $_POST['email'];
            $peso = $_POST['peso'];
            $ip = $_POST['ip'];
            $url = $_POST['url'];

            //fazendo as validacoes
            if (!filter_input(INPUT_POST,'idade',FILTER_VALIDATE_INT)) {
                $erros[] = "idade deve ser interiro";
            }
            if (!filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL)) {
                $erros[] = "email invalido";
            }
            if (!filter_input(INPUT_POST,'peso',FILTER_VALIDATE_FLOAT)) {
                $erros[] = "peso deve ser double";
            }
            if (!filter_input(INPUT_POST,'ip',FILTER_VALIDATE_IP)) {
                $erros[] = "idade deve ser interiro";
            }
            if (!filter_input(INPUT_POST,'url',FILTER_VALIDATE_URL)) {
                $erros[] = "URL invalida";
            }
            if ($_POST['nome']=="") {
                $erros[] = "introduza uma nome";
            }

            //imprimindo erros
            if (!empty($erros)) {
                foreach ($erros as $value) {
                    echo "<li> $value <?li>";
                }
            }else{
                echo "great all is right";
            }
        }
    ?>

    <H1>USANDO FILTROS</H1>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        nome: <input type="text" name="nome"> <br>
        email: <input type="email" name="email"><br>
        idade: <input type="text" name="idade"><br>
        peso: <input type="text" name="peso"><br>
        ip: <input type="text" name="ip"><br>
        URL: <input type="text" name="url"><br>
        <button type="submit" name="btn-enviar">enviar</button>
    </form>
</body>

</html>