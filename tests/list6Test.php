<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../list6/list6.php';

class List6Test extends TestCase
{
    function testList6()
    {
        $tests = [
            [
                '1234567845675678', 
                '1 * * *  -  * * * *  -  * * * *  -  5 6 7 8'
            ],
            [
                '         1234        5     6     7845      67   56 78', 
                '1 * * *  -  * * * *  -  * * * *  -  5 6 7 8'
            ],
            [
                '', 
                ''
            ],
            [
                ' ', 
                ''
            ],
            [
                '1234', 
                '1234'
            ]
        ];

        foreach ($tests as $test) {
            $this->assertEquals(maskNumbers($test[0]), $test[1]);
        }
    }
}