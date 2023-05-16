<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../list6/list6.php';

class List6Test extends TestCase
{
    function testMaksNumbers()
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

    function testFormatedString()
    {
        $tests = [
            [
                [1,2,3,4,5,6,7,8], 
                '1 2 3 4  -  5 6 7 8'
            ],
            [
                [1, 2, 3, 4],
                '1 2 3 4'
            ],
            [
                [1],
                '1'
            ],
            [
                [],
                ''
            ]
        ];

        foreach ($tests as $test) {
            $this->assertEquals(formatedString($test[0]), $test[1]);
        }
    }

    function testValidateCardNumber()
    {
        $tests = [
            [
                '', 
                false
            ],
            [
                '12345',
                false
            ],
            [
                '123455678904464',
                true
            ],
        ];

        foreach ($tests as $test) {
            $this->assertEquals(validateCardNumber($test[0]), $test[1]);
        }
    }

    function testRemoveSpaces()
    {
        $tests = [
            [
                '1234 1234 1234', 
                '123412341234'
            ],
            [
                '',
                ''
            ],
            [
                ' ',
                ''
            ]
        ];

        foreach ($tests as $test) {
            $this->assertEquals(removeSpaces($test[0]), $test[1]);
        }
    }
}