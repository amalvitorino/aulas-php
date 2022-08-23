<?php
//datas

//setando o timezone
date_default_timezone_set('Harare/Pretória');

echo date('d')."<br>";
echo date('D')."<br>";
echo date('m')."<br>";
echo date('M')."<br>";
echo date('y')."<br>";
echo date('Y')."<br>";
echo date('d/m/Y')."<br>";
echo date('l')."<br>"; //dia da semana
echo date('d/m/Y h')."<br>"; //data + hora em 12H
echo date('d/m/Y H')."<br>"; //data + hora em 24H
echo date('d/m/Y h:i:s')."<br>";
echo date('h:i:s')."<br>";
echo date('h:i:s A')."<br>";

//no caso de uso de date para armazenar no banco de dados 
$date = date('Y-m-d'); //DATE
echo $date."<br>";
$date = date('Y-m-d'); //DATE
$datetime = date('Y-m-d H:i:s');
echo $datetime."<br>";


//time retorna a quantidade de segundos que se passaram desde 1970 ate agora
echo time()."<br>";
//formatando o time
$time = time();
echo date('d/m/Y', $time)."<br>";

//mas tambem podemos usar algumas bibliotecas de time como o carbon 

//convertendo string para date
$data = '2022-04-10 15:30:00';

$data2 = strtotime($data);
echo date('d/m/Y',$data2);