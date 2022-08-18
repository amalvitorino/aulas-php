<?php
//fazendo a conexao com a base de dados (server,user,pass,db)
$server = "localhost";
$user = "root";
$pass ="";
$db = "escola";

$conexao = mysqli_connect($server,$user,$pass,$db);
