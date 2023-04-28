<?php

// 7- Escreva uma função que inverta as posições dos elementos dentro de um array.
// Não usar o array_reverse do php.
// Input: array(5, 3, 1, 15)
// Output: array(15, 1, 3, 5)


$array = [5, 3, 1, 15, 2, 4];

$indexPositive = 0;

for($i= count($array)-1; $i > $indexPositive; $i--){
        $supplus = $array[$indexPositive]; //5
        $supsub = $array[$i];   //15
        $array[$i] = $supplus; // 4[5]
        $array[$indexPositive] = $supsub; //0[15]
        $indexPositive++;
}

print_r($array);








