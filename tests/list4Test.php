<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../list4/list4.php';

class List4Test extends TestCase
{
    function testList4()
    {
        $tests = [
            [
                [4, 5, 4, 5, 2, 2, 3, 3, 3, 2, 4, 4],
                [2,3]
            ],
            [
                [2, 3, 4, 4, 4 , 3, 2],
                [4]
            ],
            [
                [],
                []
            ]
        ];

        foreach ($tests as $test) {
            $this->assertEquals(getUnpaired($test[0]), $test[1]);
        }

    }
}