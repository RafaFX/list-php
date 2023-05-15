<?php

// 6- Crie uma função que mascare números de um cartão de crédito.
// Requisitos:
// • Não mascare o primeiro dígito e os últimos quatro dígitos
// • Não mascare caracteres sem dígitos (espaços)
// • Não mascarar se a entrada for menor que 6 (quantidade de caracteres)
// • Caso nada tenha sido emputado, retorne vazio “”

//$numCartao = '1234567845675678';

// echo maskNumbers($numCartao);

function maskNumbers(string $cardNumbers):string
{
    $removedSpacesString = removeSpaces($cardNumbers);

    if (validateCardNumber($removedSpacesString) === true) {
        $arrayCardNumbers = str_split($removedSpacesString);
        for ($i = 1; $i < (count($arrayCardNumbers) - 4); $i++) {
            $arrayCardNumbers[$i] = "*";
        }
        return formatedString($arrayCardNumbers);
    }
    return $removedSpacesString;
}

function formatedString(array $array):string
{
    for ($i = 4; $i < count($array); $i += 5) {
        array_splice($array, $i, 0, ' - ');
    }
    return implode(' ', $array);
}

function validateCardNumber(string $cardNumbers):bool
{
    if ($cardNumbers === '') {
        return false;
    }
    if (strlen($cardNumbers) < 6) {
        return false;
    }
    return true;
}

function removeSpaces(string $cardNumbers):string
{
    return str_replace(' ', '', $cardNumbers);
}