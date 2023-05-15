<?php

//$array = [0, 2, 3, 0, 4, 5, 0, 6, 7, 0, 10];

function pushZerosArray(array $array):array
{
    for ($i = 0; $i < count($array); $i++) {
        if ($array[$i] === 0) {
            array_push($array, $array[$i]);
            unset($array[$i]);
        }
    }
    return array_values($array);
}


//print_r(pushZerosArray($array));