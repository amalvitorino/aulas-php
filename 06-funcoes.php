<?php
//criando funcoes 

function mostarMensagem ($msg){
    echo $msg;
}

$strg = "ola mundo <br>";

mostarMensagem($strg);

function par($numero){
    if($numero % 2 == 0){
        return true;
    }else{
        return false;
    }
}

if(par(5)){
    echo "e par";
}else{
    echo "nao e par";
}