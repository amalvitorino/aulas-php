<?php 
//manipulacao de arquivos em php 

/**
 * fopen()
 * fclose()
 * fwrite()
 * !feof()
 * fgets()
 * filesize
 */


$arquivo = 'arquivo.txt'; 
$conteudo = "Olá mundo \r\n";
$tamanhoArquivo = filesize($arquivo);

//no segundo parametro teremos os mos em que o arquivo estara aberto se eh para escrit, leitura...........

//inserrindo conteudo no arquivo:


// $arquivoAberto = fopen($arquivo,'a');
// fwrite($arquivoAberto,$conteudo);
// fclose($arquivoAberto);


//lendo conteudo do arquivo
$arquivoAberto = fopen($arquivo,'r');
while(!feof($arquivoAberto)){
    echo $linha = fgets($arquivoAberto,$tamanhoArquivo);
}
fclose($arquivoAberto);