<?php

namespace App\Model;

class User{
    private $id, $nome, $user, $senha;

    function setId($id){
        $this->id = $id;
    }

    function getId(){
        return $this->id;
    }

    function setNome($nome){
        $this->nome = $nome;
    }

    function getNome(){
        return $this->nome;
    }

    function setUser($user){
        $this->user = $user;
    }

    function getUser(){
        return $this->user;
    }

    function setSenha($senha){
        $this->senha = $senha;
    }

    function getSenha(){
        return $this->senha;
    }
}