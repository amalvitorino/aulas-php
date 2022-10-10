<?php

require 'classes/produto.php';
require 'models/produto.php';

use models\produto;
use classes\produto as prodClass;

$produto = new produto();

$prod = new prodClass();

$produto->mostrarDados();
echo "<br>";
$prod->mostrarDados();

echo "<hr>";
//referencia e clonagem de objectos

class Papaia{
    public $peso;

    //o metodo clone eh inicializado logo que uma instacia eh clonada
    function __clone()
    {
        $this->peso = 0.0;
    }
}

$p1 = new Papaia;
$p1->peso = 12.4;

//ao fazer  o clone de um objecto o novo objecto herda todas as caracteristicas do objecto clonado
$p2 = clone $p1;
echo $p2->peso;


//----------------------------------------------------------
echo "<hr>";
echo "relacao entre os objectos associacao <br> <br>";
//relacao entre os objectos
//associacao

class Cliente{
    public $nome;

    function __construct($nome)
    {
        $this->nome = $nome;
    }
}

class Pedido{

    public $numero;
    public  $cliente;//associacao entre objectos 
}

$c1 = new Cliente("Amal");

$p1 = new Pedido();
$p1->numero = 1;
$p1->cliente = $c1;

$dados = ['nome' => $p1->numero, 'nome_cliente' => $p1->cliente->nome];

var_dump($dados);







echo "<hr>";
//relacao entre os objectos
//agregacao (uma classe precisa da outra para realizar uma accao)
echo "relacao entre os objectos agregacao <br> <br>";


class Coisa {
    public $nome, $valor;

    function __construct($nome, $valor)
    {
        $this->nome = $nome;
        $this->valor = $valor;
    }
}

class Carrinho {
    public $produto;

    //essa associacao chama-se agregacao
    public function adicionar(Coisa $coisa){
        $this->coisa[] = $coisa;
    }

    function exibir(){
        foreach ($this->coisa as $coisa) {
            echo $coisa->nome . "<br>";
            echo $coisa->valor . "<br>";
        }
    }
}

$c = new Coisa("algo qualquer",700);
$c1 = new Coisa("outa coisa qualquer",500);

$carinho = new Carrinho();
$carinho->adicionar($c1);
$carinho->adicionar($c);
$carinho->exibir();

echo "<hr>";
//relacao entre os objectos
//composicao (uma classe cria a instancia de uma classe dentro de si proprio)
echo "relacao entre os objectos composicao <br> <br>";

class Ave {
    public function atribuirNome($nome){
        return "no nome da ave e: $nome";
    }
}

class Exibe{
    public $ave, $nome;

    function __construct($nome)
    {
        $this->ave = new Ave();
        $this->nome = $nome;
    }

    function exibeNome(){
        echo $this->ave->atribuirNome($this->nome);
    }
}

$exibe = new Exibe("Pato");
$exibe->exibeNome();