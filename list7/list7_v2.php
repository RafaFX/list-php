<?php

$array = [5, 3, 1, 15, 2, 4];

$arrayInverted =[];

for($i= count($array)-1; $i >= 0; $i--){
        array_push($arrayInverted, $array[$i]);
}

print_r($arrayInverted);