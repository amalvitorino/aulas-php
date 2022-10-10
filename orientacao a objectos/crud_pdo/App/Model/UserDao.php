<?php

namespace App\Model;
use PDO;

class UserDao{

    function create(User $u){
        $sql = "INSERT INTO `usuarios`(nome,user,senha) VALUES (?,?,?)";

        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(1,$u->getNome());
        $stmt->bindValue(2,$u->getUser());
        $stmt->bindValue(3,$u->getSenha());

        $stmt->execute();
    }

    function read(){
        $sql = "SELECT * FROM usuarios";
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount()>0){
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);
        }else{
            return [];
        }
    }

    function update(User $u){
        $sql = "UPDATE `usuarios` SET nome= ?,user =?,senha = ?  WHERE id = ?";

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1,$u->getNome());
        $stmt->bindValue(2,$u->getUser());
        $stmt->bindValue(3,$u->getSenha());
        $stmt->bindValue(4,$u->getId());

        $stmt->execute();
    }

    function delete($id){
        $sql = 'DELETE FROM usuarios WHERE id = ?';

        $stmt = Conexao::getConn()->prepare($sql);

        $stmt->bindValue(1,$id);

        $stmt->execute();
    }
}