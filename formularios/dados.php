<?php

if (isset($_POST['nome'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    echo "O seu nome eh $nome, e seu email e $email";
}

if (isset($_POST['valor'])) {
    $produto = $_GET['produto'];
    $valor = $_GET['valor'];
    echo "$produto, custa: $valor";
}
