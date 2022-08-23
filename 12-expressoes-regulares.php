<?php
//expressoes regulares serevem para definir um padrao a ser usado para procurar ou substituir palavras ou grupos de palavras.

// ^ inicio da expressao, $ fim da expressao - /i - case sensitive
/**
 * [] conjunto de caracteres
 * {} ocorrencias - ?{0-1} *{0,} +{1,}
 * /^[a-z0-9.\-\_]+@[a-z0-9-\_]+\.(com|mz|br|com.mz|net)$/
 * /^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/
 */

$email = "amal@gmail.mz";
$padraoEmail = "/^ [a-z0-9.\-\_]+ @ [a-z0-9.\-\_]+\.(com|mz|br|com.mz|net)$/i";


function validar($padrao, $string)
{
    if (preg_match($padrao, $string)) {
        echo "válido";
        echo "<hr>";
        echo $string;
    } else {
        echo "inválido";
    }
}

//isso tem haver com automatos :) ......

//validado formato de uma data 
$data = "17/12/1211";
$padraoData = "/^[0-9]{2}\/[0-9]{2}\/[0-9]{4}$/";
validar($padraoData,$data);