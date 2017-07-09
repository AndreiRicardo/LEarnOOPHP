<?php
/*este cinteudo refere-se a aula6 um pouco de funções

    function imprimir(){
        echo 'Aqui foi usado uma função para imprimir uma menssagem';
    }
    imprimir();

//passando parametros para função
    function EscreveNome($name){
        print "nome ".$name;
    }
    EscreveNome('Andrei');
    */
    // passando mais de um parametro

    function EscreveNome($msg,$name){
        //print $msg." ".$name; // imprimindo os valores
        print strtoupper($msg." ".$name);// imprindo em letra maiuscula
    }
    EscreveNome('Olá','Andrei');

?>