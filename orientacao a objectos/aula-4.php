<?php
//metodos magicos
//clone *
//construct* 
//invoke 
//tostring *
//get *
//set *


class Maquina{
    private $nome;

    function __set($name, $value)
    {
        $this->nome = $value;
    }

    function __get($name)
    {
        return $this->nome;
    }

    function __toString()
    {
        return "nome: $this->nome";
    }
    
    public function __invoke()
    {
        return "objecto com funcao";
    }
}

$pessoa = new Maquina();
$pessoa->nome = "Carro";

echo $pessoa;
echo "<br>";
echo $pessoa();