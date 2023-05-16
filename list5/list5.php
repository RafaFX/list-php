<?php

// 5- Escreva uma função que retorne true caso uma palavra seja um palíndromo (palavra que lendo de
// trás para frente possui o mesmo significado, exemplo: osso).


$str = 'Osso';

function isPalindrome(string $text):bool{

    if($text === '')
    {
        return false;
    }

    $textWithoutAccentuation = removeAccentuation($text);

    $textUpperCase = strtoupper($textWithoutAccentuation);

    return $textUpperCase === strrev($textUpperCase);
}

function removeAccentuationString(string $str):string{
    $withAccentuation = [ 'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'O', 'Ù', 'Ü', 'Ú'];

    $withoutAccentuation = ['a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A', 'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U'];

    return str_replace($withAccentuation, $withoutAccentuation, $str);
}

//echo (isPalindrome($str));





