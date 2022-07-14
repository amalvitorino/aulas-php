<?php
//nesta aula vamos aprofundar mais sobre arrays

$carros = ["Toyota","Izuso","Nissan"];

//funcao especifica para exibir um array
print_r($carros);
echo "<br> $carros[2]"; //imprimindo uma posicao especifica  

echo "<hr>";
//outra forma de criar arrays

$motos = array();

$motos[] = "Yamaha";
$motos[7] = "Honda";
$motos[] = "Suzuki";
// podendo especificar a posicao ou nao
//para saber a quantidade do array
echo "<br> ".count($motos); //podemos atribuir esse valor a uma variavel 

//usando loops para exibir o coneudo dos arrays
echo "<hr>";
foreach ($motos as $moto){
    echo $moto."<br>";
}

echo "<hr>";
//arrays associatios = indices string
$pessoa = array("nome" => "amal", "idade"=> 23);
echo $pessoa["nome"];
echo "<br> <br>";
print_r($pessoa);
echo "<br> ";

foreach($pessoa as $indice => $valor){
    echo $indice.": ".$valor."<br>";
}

echo "<hr>";
//arrays multidimessionais = contem um ou mais arrays
$provincias = array(
    "sul" => array("Maputo","Gaza","Inhambane"),
    "centro" => array("Beira","Chimoio","Zambezia","Tete"),
    "norte" => array("Nampula","Niassa","Cabo-Delgado")
);

print_r($provincias);
echo "<br> <br>";
echo $provincias["sul"][2];
echo "<br> <br>";
foreach($provincias["norte"] as $valor){
    echo $valor."<br>";
}

//funcoes para arrays
echo "<hr>";
echo "<br>";

echo is_array($provincias);
echo "<br>";
echo in_array("amal",$pessoa);
echo "<br>";
$key = array_keys($pessoa);//arrays keys retorna um novo array com os valores dos indices do array passado por parametro 
$value = array_values($pessoa);//retorna um novo array com os valores do array passado por parametro
print_r($value);
echo "<br>";
echo $pessoa[$key[1]]; //brincando com arrays kkkkkkkk

print_r(array_merge($carros,$motos)); //junta dois arrays
array_pop($motos); //elimina a ultima posicao do array
array_shift($carros);//elimina a primeira posicao do array
array_unshift($carros,"Vitz","FunCargo"); //adiciona um ou mais elementos no inicio no array
array_push($carros,"Toyota"); //adiciona um ou mais elementos no fim no array
print_r($carros);
echo"<hr>";
$keys = ["primeiro","segundo"];
$values = array("eu","ele");
print_r(array_combine($keys,$values)); //serve para mesclar dois array

echo "<br>";
$numeros = [1,2,3,4,5,6,7,8,9];
echo array_sum($numeros); //serve para somar todos os valores de um array

echo"<hr>";
$data = "02/12/1999";
$array_data = explode("/",$data); //transforma uma string em um array
var_dump($data);
echo "<br>";
print_r($array_data);

echo"<hr>";
var_dump(implode("/",$array_data));