<?php
/*  esteconteudoreferen-seaaula5
    usando variaveis
    $minhaVariavel = 'Deu certo usar a variável';
    echo $minhaVariavel;
 
    crinado simples arrays

    //$numeros = array(10,11,12,13,14,15,16,17,18);
    //$numeros = array{10,11,12,13,14,15,16,17,18};
   
    //print_r($numeros);
    //echo $numeros[5];
$idade = array(
    "andrei" => 35,
    "ricardo" => 36,
    "rodrigo" => 30,
    "rafael" => 32
);
    //array_pop ($idade);// devolve chave/valor da array
    //array_shift ($idade);// devolve chave/valor da primeira e ultima posição
    //echo $idades['andrei']; // vai imprimir o valor da posição
    //echo count($idades);// vai imprimir a quantidade de itens no vetor
    //print_r($idade);
 
    for($i = 1; $i < 6; $i++){
        print "<br>$i<br>";
    }

$i = 0;
while($i <= 20){
    print 'O valor = '.$i.'<br/>';
    $i++;
}
 */
$idade = array(
    "andrei" => 35,
    "ricardo" => 36,
    "rodrigo" => 30,
    "rafael" => 32
);
    print "<table>\n";
    foreach($idade as $nome => $valor){
    print "<tr><td>nome = </td><td>$nome</td><td>idade = </td><td>$valor</td></tr>\n";
    }
    print "</table>";
?>