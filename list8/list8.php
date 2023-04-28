<?php

// 8- Crie uma função que encontre o elemento N que, somado a outro elemento N ou K dentro de um
// array, resulte na soma 6:
// Não deve ser utilizado loops para resolver esse exercício.
// $array = [1, 8, 13, 11, 1, 3, -2, -6, 5]

//output [1, 8, 3, -2, 5];

$array = [1, 8, 13, 11, 1, 3, -2, -6, 5];

function recursiveFor($array,&$arraySix=[], $n = 0, $k = 0){
    if ($k >= count($array)) {
        recursiveFor($array,$arraySix, ++$n);
    } else if ($n < count($array) - 1) {
        getAddedEqualsToSix($array[$n], $array[$k],$arraySix);
        recursiveFor($array,$arraySix, $n, ++$k);
    }
    return $arraySix;
};

function getAddedEqualsToSix($n, $k,&$arraySix){
    if ($n + $k === 6) {
        $array= [$n,$k];
        sort($array);
        array_push($arraySix,$array);
    }
}

echo json_encode(recursiveFor($array)); 

?>