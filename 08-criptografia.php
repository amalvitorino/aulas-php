<?php
//vamos abordar algumas criptografias mais usadas em php
$senha = "123456";


//base64_encode = criptografia de mão dupla (podendo criptografar e descriptografar)
$novaSenha = base64_encode($senha);
echo "$novaSenha = ".base64_decode($novaSenha);

echo "<hr>";

//criptografias de mão única, so podemos criptografar

echo "Md5: ". md5($senha);
echo "<br>";
echo "Sha1: ". sha1($senha);

/**
 * Ainda que o md5 e o sha1 sejam de mão única ainda é possível descriptografar unsano o crackstation por exemplo
 * desta feita vamos ver outra alternativa para garantir mais segurança no nosso código
 */

echo "<br>";
$senha2 = 123;
$senha_db = '$2y$10$pM4go9e2rtk3GiC433KXU.Bpc8KRxbEXH8vP6D9Cj/uTX1T3m9.Qu';

$senhaForte = password_hash($senha2,PASSWORD_DEFAULT);
echo "senha forte: $senhaForte <br>";

if(password_verify($senha2,$senha_db)){
    echo "logado";
}else{
    echo "senha invalida";
}