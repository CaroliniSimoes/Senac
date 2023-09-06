<?php 

//Função
    function addNumeros ($numerosaADD) {
        $soma = 0;
        foreach ($numerosaADD as $umNumero) {
            $soma += $umNumero;
        }
        return $soma;
    }

//Dados a trabalhar
$meusNumeros = array(2, 4, 2, 7);
$meusNumeros2 = array(333, 222, 111);
$meusNumeros3 = array(777, 555, 777, 555);

//Chamando a Função
$soma1 = addNumeros($meusNumeros);
$soma2 = addNumeros($meusNumeros2);
$soma3 = addNumeros($meusNumeros3);


//Exibe
echo $soma1 . "\n";
echo $soma2 . "\n";
echo $soma3 . "\n";

?>