<?php
//cookie eh um arquivo criado pelo servidor no computador do usuario para armazenar algumas informacoes

setcookie('user','Amal Vitorino',time()+3600);
setcookie('email','amalyvitorino377@gamil.com',time()+3600);
setcookie('ultima_pesquisa','Tenis adidas',time()+3600);

//var_dump($_COOKIE);

//para actualizar os cookies basta reescrever 


//para apagar basta negatvar o valor do time 
setcookie('ultima_pesquisa','Tenis adidas',time()-3600);

//no caso de querer usar o cookie

echo $_COOKIE['email'];

//nunca usar o cookie para armazenar informacoes  de login e senha.... uma vez que o cookie fica armazenado do lado do usuario pode ser arriscado.