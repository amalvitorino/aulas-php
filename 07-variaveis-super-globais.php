<?php 
//+++++++++++ Aula de variaveis super globais ++++++++++++

/**
 * $GLOBALS
 * $_SERVER --> conte informacao sobre cabecalho caminhos... tem varios indices
 * $_REQUEST
 * $_POST --> serve para colectar dados
 * $_GET --> tambem serve para colectar dados
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 */

//essas variaveis em qualquer lugar sao acessiveis

$x = 10;
$y = 15;

function soma(){
    echo $GLOBALS['x'] + $GLOBALS['y']; //assim podemos acessar as variaveis onde quisermos
    //echo $x + $y; -> assim nao seria possivel acessar as variaveis 
}

echo $_SERVER['SERVER_NAME']; 
echo $_SERVER['SERVER_PORT'];
