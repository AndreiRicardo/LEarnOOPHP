<?php
/* usando variaveis
    $minhaVariavel = 'Deu certo usar a variável';
    echo $minhaVariavel;
 */
    /* crinado simples arrays
 */ 
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
    mixed array_pop(array $idades);
    //echo $idades['andrei']; // vai imprimir o valor da posição
    //echo count($idades);// vai imprimir a quantidade de itens no vetor
    print_r($idades);
?>