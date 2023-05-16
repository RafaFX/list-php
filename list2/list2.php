<?php

//$array = [1, 6, 3, 9, 2, 5, 4, 5, 5, 6, 5];


function getMode(array $array):int
{
    $max = 0;
    $maxKey = 0;

    $newArray = getArrayWithCountedValues($array);

    foreach($newArray as $key => $value){
        if($value > $max){
            $max = $value;
            $maxKey = $key;
        }
    }
    return $maxKey;
}

function getArrayWithCountedValues(array $array):array
{
    $a = array_fill_keys($array, 0);

    foreach($array as $value){
        $a[$value] += 1;
    };
    
    return $a;
}


//print_r("A moda é: ".getMode($array). PHP_EOL);