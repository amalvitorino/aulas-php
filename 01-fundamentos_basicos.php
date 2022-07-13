<?php

// ++++++++++++ comandos para print na tela +++++++++++++++++
echo "Ola mundo <br>";
print "Oi Amal";

echo"<hr>";
//++++++++++++++ Apredendo sobre variáveis +++++++++++++++++++
$nome = "Alguem";
$idade = 23;
$altura = 1.53;

echo "<br> Nome $nome, idade $idade, altura $altura";

echo"<hr>";
//Variaveis variaveis
echo "<br>";
$string = "dias";
$$string = "hoje";
echo $dias; 

echo"<hr>";


//++++++++++++++++++++ tipos de dados +++++++++++++++++++++++++
var_dump($nome); //esta funcao permite saber o tipo de dado de uma determinada variavel
//tambem podemos usar uma estrutura de condicao para saber o tipo de dado
echo "<br>";
if(is_string($nome)):echo "é uma string";
else:echo "não é uma string";
endif;

echo "<br>";
//array
$pessoas = array("amal","amide",12,11.0,false);
var_dump($pessoas);

echo "<br>";
//object
class Cliente{
    public $nome;

    public function atribuirNome($nome){
        $this->$nome = $nome;
    }
}

$cliente1 = new Cliente(); 
$cliente1->atribuirNome($nome);
var_dump($cliente1);

echo "<br>";
if(is_object($cliente1)):echo "é um objecto";
else:echo "não é um objecto";
endif;

$comida = null;

echo"<hr>";
//++++++++++++++++++++++++++ apas e concatenacao ++++++++++++++
//usando aspas simples para imprimir uma mensagem tem que concatenar pois tudo dentro das aspas simples e considerado string
$operadora = 'vodacom';
echo 'o nome da operadora e '.$operadora;
echo '<br >eu vi um \'boi\'.'; // para usar aspas simples dentro de aspas simples
echo '<br>';
echo "o nome da operadora e $operadora";
echo "<br> eu vi um \"boi\".";

echo"<hr>";
//++++++++++++++++++++++++++ escopos de variaveis (globais e locais) ++++++++++++++
function exibeNome(){
    global $nome;
    echo $nome; 
}

exibeNome();
echo "<br>";
function exibeCidade(){
    $nome = 'matola';
    echo $nome; 
}

exibeCidade();
echo "<br>";
function soma(){
    
    echo $GLOBALS['idade'] +  $GLOBALS['altura'] ;
}
soma();

echo "<hr>";
//+++++++++++++++++ COnstantes +++++++++++++++++
//constantes sao globais por defeito
define("PI",2.14);
echo 'calor de pi = '.PI;

echo "<br>";

define("TIMES",['barcelona','real madrid','chelse']);
echo TIMES[0];