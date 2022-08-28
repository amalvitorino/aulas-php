<?php
 echo "<hr> Aula_1 <hr> <br>";

/**
 * nodestudio.com.br (curso basico de php)
 * para ter conhecimento basico para poder comecar a orientacao a objecto 
 * 
 * metodo procedural
 * metodo orientado a objectos
 */


 //criando uma classe 
//boas praticas: o nome da classe deve ser em maiuscula
 class Pessoa{ 
    private  $nome, $email;

    //metodo construtor 
    public function __construct()
    {
        
    }

    //metodos geters e setrs
    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        //limpando a variavel, ou seja, validando-a
        $this->email = filter_var($email,FILTER_SANITIZE_EMAIL);
    }



    public function falar($msg){
        echo $this->nome." disse: $msg";
    }

 }

 $pessoa1 = new Pessoa;
 $pessoa1->falar("Ola");


 echo "<hr> Aula_2 <hr> <br>";
 //criando outra classe com os metodos de acesso privados
 class User extends Pessoa{
    private $senha;

    //metodo construtor 
    public function __construct()
    {
        $this->senha = "123";
        $this->nome = "usuario".date('d');
    }

    public function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }


    public function logar($email, $senha){
        if($email == $this->getEmail() && $senha == $this->senha){
            echo $this->nome." está logado";
        }else{
            echo "Dados inválidos";
        }
    }
 }

 $user = new User;
 $user->setEmail("am///al@123.com");

 $email = "amal@123.com";
 $senha = "123";

 $user->logar($email,$senha);