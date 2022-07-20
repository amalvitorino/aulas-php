<?php
// aulas sobre ciclos

$n = 10;

while ($n > 0){
    echo "Sarita <br>";
    $n--;
}
echo "<br>";

do{
    $n++; 
    echo "$n <br>"; 
}while ($n<10);


echo "<hr>";
//ciclo for 

for ($i=0 ; $i<=12; $i++){
    echo "12 * $i = ".$i*12 ."<br>";
}

echo "<br>";
//o foreach foi criado para percorrer arrays 

$cores = ['amarelo','azul','verde'];
foreach ($cores as $key => $value) {
    echo $key.'-'.$value.'<br>';
}
