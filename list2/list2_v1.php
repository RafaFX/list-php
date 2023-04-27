<?php

$array = [1, 6, 3, 9, 2, 5, 4, 5, 5, 6, 5];


function getMode($array){

    $a = array_fill_keys($array, 0);
    $max = 0;
    $maxKey = 0;

    foreach($array as $value){
        $a[$value] += 1;
    };
    foreach($a as $key => $value){
        if($value > $max){
            $max = $value;
            $maxKey = $key;
        }
    }
    return $maxKey;
}





print_r(getMode($array));