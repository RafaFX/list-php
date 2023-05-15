<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../list2/list2.php';


class List2Test extends TestCase
{
    function testList2()
    {

        $tests = [
            [
                [1, 6, 3, 9, 2, 5, 4, 5, 5, 6, 5],
                5
            ],
            [
                [ 3, 4, 5, 6, 6, 6, 6, 4, 8, 90],
                6
            ],
            [
                [],
                null
            ]

        ];

        foreach ($tests as $test) {
            $this->assertEquals(getMode($test[0]), $test[1]);
        }
    }
}