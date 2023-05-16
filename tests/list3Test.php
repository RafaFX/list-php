<?php
use PHPUnit\Framework\TestCase;


require_once __DIR__ . '/../list3/list3.php';

class List3Test extends TestCase
{
    function testGetNumberOfCaracteres()
    {

        $tests = [
            [
                'Estou praticando exercícios',
                10
            ],
            [
                'Foi um dia produtivo',
                9
            ],
            [
                '',
                null
            ],
            [
                ' ',
                null
            ]
        ];

        foreach ($tests as $test) {
            $this->assertEquals(getNumberOfCaracteres($test[0]), $test[1]);
        }
    }

    function testRemoveAccentuation()
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
            $this->assertEquals(removeAccentuation($test[0]), $test[1]);
        }
    }
}