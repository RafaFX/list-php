<?php

$array = [1, 6, 3, 9, 2, 5, 4, 5, 5, 6, 5];


function getMode($array){

    $max = 0;
    $maxKey = 0;

    $nemArray = getArrayWithCountedValues($array);

    foreach($nemArray as $key => $value){
        if($value > $max){
            $max = $value;
            $maxKey = $key;
        }
    }
    return $maxKey;
}

function getArrayWithCountedValues($array){

    $a = array_fill_keys($array, 0);

    foreach($array as $value){
        $a[$value] += 1;
    };
    return $a;
}

print_r("A moda é: ".getMode($array));