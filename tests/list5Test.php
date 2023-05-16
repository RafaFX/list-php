<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../list5/list5.php';

class List5Test extends TestCase
{
    function testList5()
    {

        $tests = [
            [
                'Osso',
                true
            ],
            [
                'aibofobia',
                true
            ],
            [
                'Olá bom dia',
                false
            ],
            [
                '',
                false
            ]

        ];

        foreach ($tests as $test) {
            $this->assertEquals(isPalindrome($test[0]), $test[1]);
        }
    }

    function testList5RemoveAccentuation()
    {

        $tests = [
            [
                'Exercícios',
                'Exercicios'
            ],
            [
                'Concluída',
                'Concluida'
            ],
            [
                '',
                ''
            ],
            [
                ' ',
                ' '
            ]
        ];

        foreach ($tests as $test) {
            $this->assertEquals(removeAccentuationString($test[0]), $test[1]);
        }
    }
}