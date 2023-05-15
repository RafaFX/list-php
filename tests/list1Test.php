<?php
require_once __DIR__ . '/../list1/list1.php';
use PHPUnit\Framework\TestCase;


class List1Test extends TestCase
{
    function testList1()
    {

        $tests = [
            [
                [0, 2, 3, 0, 4, 5, 0, 6, 7, 0, 10],
                [2, 3, 4, 5, 6, 7, 10, 0, 0, 0, 0]
            ],
            [
                [0, 2, 3, 0, 5, 0, 6, 0, 10],
                [2, 3, 5, 6, 10, 0, 0, 0, 0]
            ],
            [
                [0, 2, 3, 0, 4, 0, 0, 6, 0, 0, 10, 12, 75, 0, 34],
                [2, 3, 4, 6, 10, 12, 75, 34, 0, 0, 0, 0, 0, 0, 0]
            ],
            [
                [],
                []
            ],
            [
                ['a','b'],
                ['a','b']
            ]
        ];


        foreach ($tests as $test) {
            $this->assertEquals(pushZerosArray($test[0]), $test[1]);
        }
    }
}