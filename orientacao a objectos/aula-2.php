<?php
//classes e metodos abstractos 

abstract class Muno
{
    const numCoracao = 2;
    //atributos da classe
    protected $name, $apelido;

    //esta classe nao precisa de um construtor porque nao pode ser instanciada uma classe abstract

    abstract protected function fazerAniverzario();
}


class Aluno extends Muno
{
    //constante 
    const numCoracao = 1;

    //construtor
    function __construct($nome, $apelido)
    {
        $this->nome = $nome;
        $this->apelido = $apelido;
    }

    function fazerAniverzario()
    {
        echo "Feliz aniversario<br> numero de coracao: ".parent::numCoracao ."<br> desta classe: ".self::numCoracao;
    }
}

$a = new Aluno("Amal", "Mbussila");

echo $a->fazerAniverzario();
