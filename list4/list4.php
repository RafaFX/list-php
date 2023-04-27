<?php


// 4 – Escreva uma função que retorne o número que aparece o número ímpar de vezes em um array,
// exemplo:
// Input : array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4)
// Output : 2

$array = [4, 5, 4, 5, 2, 2, 3, 3, 3, 2, 4, 4];


function getUnpaired($array) {
    $a = array_fill_keys($array, 0);

    foreach($array as $value){
        $a[$value] += 1;
    };

    $arrayFinal = [];

    foreach($a as $key => $value){
        if($value % 2 !== 0){
            array_push($arrayFinal,$key);
        }
    }
}



print_r(getUnpaired($array));