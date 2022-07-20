<?php
//funcoes para strings

/**
 * strtoupper => upcase
 * strotolower => lowcase
 * subtr
 * str_pad
 * str_repeat
 * strlen
 * str_replace
 * strpos
 */

$nome = "amal";
echo strtoupper($nome)."<br>";

$mensagem = "Olá mundo";
echo substr($mensagem, 4)."<br>";  
echo substr($mensagem, 0,6)."<br>";  

$objecto = "mouse";
$novoObjecto = str_pad($objecto,8,"#",STR_PAD_BOTH);
echo $novoObjecto."<br>";

$string = str_repeat("sucesso ",10);
echo $string."<br>";

echo strlen($string)."<br>";

$texto = "A selecao argentina sera campea da copa do mundo 2022";

echo str_replace("mundo","pais",$texto) ."<br>";
echo strpos($texto,"2022");

echo "<hr>";
//funcoes para numeros 
/**
 * number_format //formata numeros
 * round /arredonda
 * ceil
 * floor
 * rand //random = gera numeros aleatorios
 */

$db = 1211233.34123;

echo "valor a pagar é : ".number_format($db,2,',','.').' MZN <br>';

echo round(9.3)."<br>";

//ceil so arredonda para cima
echo ceil(3.2)."<br>";
//floor arredonda sempre para baixo

echo rand(1,5);
