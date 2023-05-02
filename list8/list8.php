<?php

// 8- Crie uma função que encontre o elemento N que, somado a outro elemento N ou K dentro de um
// array, resulte na soma 6:
// Não deve ser utilizado loops para resolver esse exercício.
// $array = [1, 8, 13, 11, 1, 3, -2, -6, 5]

//output [1, 8, 3, -2, 5];

$array = [1, 8, 13, 11, 1, 3, -2, -6, 5];

function recursiveFor($array, $n = 0, $k = 0, $arraySix = [])
{
    if ($k >= count($array)) {
        return recursiveFor($array, ++$n, 0, $arraySix);
    } else if ($n < count($array) - 1) {
        if ($array[$n] + $array[$k] === 6) {
            //array de strings filtradas
            $arraySix = getAddedEqualsToSix($array[$n], $array[$k], $arraySix);
        }
        return recursiveFor($array, $n, ++$k, $arraySix);
    }
    return $arraySix;
}
;

function getAddedEqualsToSix($n, $k, $arraySix)
{
    $array = [$n, $k];
    sort($array);
    // $arraySix[$array[0]] = $array[1];
    $result = ' '.implode(' + ', $array).' = 6 ';
    array_push($arraySix, $result);
    $arraySix = array_unique($arraySix);
    return $arraySix;
}

echo json_encode(recursiveFor($array));

?>