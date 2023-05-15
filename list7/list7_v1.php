<?php

// 7- Escreva uma função que inverta as posições dos elementos dentro de um array.
// Não usar o array_reverse do php.
// Input: array(5, 3, 1, 15)
// Output: array(15, 1, 3, 5)

//$array = [5, 3, 1, 15, 2, 4];


function invertArray(array $array, int $indexPositive = 0): array
{
        for ($i = count($array) - 1; $i > $indexPositive; $i--) {
                $temp = $array[$i];
                $array[$i] = $array[$indexPositive];
                $array[$indexPositive] = $temp;
                $indexPositive++;
        }
        return $array;
}
;


//print_r($array);
