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
    public static $numAluno;

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

    public static function getCodigoAluno(){
        return self::$numAluno;
    }

    public static function setCodigoAluno($numero){
        self::$numAluno = $numero;
    }
}

$a = new Aluno("Amal", "Mbussila");

echo $a->fazerAniverzario();


echo "<hr>";

//podemos atribuir um valor a variavel estatica sem precisar instanciar a classe
Aluno::$numAluno = 12;
Aluno::setCodigoAluno(20);

//para usar um metodo estatico nao eh necessario instanciar a classe para usala
echo "Codigo aluno: ".Aluno::getCodigoAluno();

