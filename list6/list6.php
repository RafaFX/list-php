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
        $arrayCardsNumbers = str_split($removedSpacesString);
        for($i = 1; $i < (count($arrayCardsNumbers)-4); $i++){
            $arrayCardsNumbers[$i] = '*';
        }
        return formatedString(implode('',$arrayCardsNumbers));
    }else{
        echo validateCardNumber($removedSpacesString);
    }
}

echo maskNumbers($numCartao);

function formatedString($str){

    $array = [];

    for($i=0; $i < strlen($str); $i+=4){
        $array[] = substr($str,$i,4);
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

