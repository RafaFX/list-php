<?php

// 6- Crie uma função que mascare números de um cartão de crédito.
// Requisitos:
// • Não mascare o primeiro dígito e os últimos quatro dígitos
// • Não mascare caracteres sem dígitos (espaços)
// • Não mascarar se a entrada for menor que 6 (quantidade de caracteres)
// • Caso nada tenha sido emputado, retorne vazio “”

$numCartao = '2323 2323 2323 2323';

// echo maskNumbers($numCartao);

function maskNumbers(string $cardNumbers) {

    $removedSpacesString = removeSpaces($cardNumbers);

    if(validateCardNumber($removedSpacesString)){
        $arrayCardNumbers = str_split($removedSpacesString);
        for($i = 1; $i < (count($arrayCardNumbers)-4); $i++){
            $arrayCardNumbers[$i] = "【 ͡❛ ͜ʖ ͡❛】 "  ;
        }
        return formatedString($arrayCardNumbers);
    }else{
        echo validateCardNumber($removedSpacesString);
    }
}

print_r(maskNumbers($numCartao));

function formatedString($array){
    for($i=4; $i < count($array); $i+=5){
        array_splice($array,$i,0,' - ');
    }
    return implode(' ',$array);
}

function validateCardNumber(string $cardNumbers){
    if($cardNumbers === ''){
        return '';
    }else if(strlen($cardNumbers) < 6 ){
        return $cardNumbers;
    }else {
        return true;
    }
}

function removeSpaces (string $cardNumbers){
    return str_replace(' ','',$cardNumbers);
};

