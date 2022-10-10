<?php

use App\Model\User;
use App\Model\UserDao;

require_once 'vendor/autoload.php';

$user = new User();

$user->setId(6);
$user->setNome("Ohoo");
$user->setUser("Ohoo_00");
$user->setSenha("123@");

$userDao = new UserDao();
//$userDao->create($user);

//$userDao->update($user);

$userDao->delete($user->getId());

foreach($userDao->read() as $user){
    echo $user['nome']."<hr>";
}


