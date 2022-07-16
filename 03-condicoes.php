<?php
//+++++++++++++++++++ Aula sobre condicoes ++++++++++++++++++
//condicoes if, else, elseif, e a juncao dos dois
$saldo = 88;

if ($saldo == 0) {
    echo "nullo";
} elseif ($saldo > 0) {
    echo "Posetivo";
} else {
    echo "negativo";
}

//operador ternario 

echo "<hr>";
$media = 8;
echo $media >= 10 ? "Aprovado" : "Reprovado";


echo "<hr>";
//condicoies switch:case

$opcao = 1;

switch ($opcao) {
    case 1:
        echo "Menu";
        break;

    case 2:
        echo "sair";
        break;

    default:
        echo "opcao invalida";
        break;
}

echo '<br>';
//Operadores artimetricos: Adicao (+), subtracao (-) divisao(/) multiplicacao (*) resto da divisao/modulo (%) exponenciacao (**)

echo 3 ** 3; //=27

//incremento ou decrimento --aumento ou diminuicao de um valor
echo '<hr>';
$i = 0;
$ii = 0;
echo ++$i; //pre-incremento
echo '<br>';
echo $ii++; //pos incremento 
echo '<br>';
echo $ii++;

echo '<hr>';
$d = 0;
$dd = 0;
echo --$d; //pre-decremento
echo '<br>';
echo $dd--; //pos decremento
echo '<br>';
echo $dd--; 

//atribuicao (=) comparacao igual(==) comparacao diferente(!=)
//+= (a+=b = a = a+b) -=, *=, ...
// === (identidade, verifica se os dados sao idendicos)
// !=== (nao identico) derificam mais os tipos de dados
// <> (igual a !=)
// <=> (space ship) retorna -1 se o lado esquerdo for pequeno, 0 se forem igual ambas partes e 1 se o lado direito for posetivo


//Operadores logicos
// e (&& - and)
// ou (|| - or)
// 'ou' exclusivo (xor) //ou um ou o outro nunca ambos
// negacao (!)
echo '<hr>';


