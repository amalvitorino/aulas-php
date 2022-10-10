<?php
//aula sobre polimorfismo que consiste em reescrever um metodo herdado da super classe

abstract class Animal {
    function Andar(){
        echo "O animal andou";
    }
}

class Cavalo extends Animal{
    function Andar(){
        echo "O cavalo andou";
    }
}

$c = new Cavalo();
$c->Andar();


//vamos ver agora as interfaces que serve para fazer um modelo a ser usado para as outras classe

interface Crud{
    public function create();
    public function read();
    public function update();
    public function delete();
}

abstract class Informacao{
    public $titulo;

    abstract function pesquisar();
}

class Noticias extends Informacao implements Crud {
    public function create(){
        //logica para criar noticia
    }
    public function read(){
        //logica para ler noticia
    }
    public function update(){
        //logica para actualizar noticia
    }
    public function delete(){
        //logica para deletar a noticia
    }

    function pesquisar()
    {
        //implementar a logica de pesquisar
    }
}

