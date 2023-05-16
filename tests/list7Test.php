<?php 
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../list7/list7_v1.php';
require_once __DIR__ . '/../list7/list7_v2.php';

class List7Test extends TestCase
{
    function testList7_v1()
    {
        $tests = [
            [
                [5, 3, 1, 15],
                [15, 1, 3, 5]
            ],
            [
                [],
                []
            ]
        ];

        foreach($tests as $test)
        {
            $this->assertEquals(invertArray($test[0]),$test[1]);
        }
    }

    function testList7_v2()
    {
        $tests = [
            [
                [5, 3, 1, 15],
                [15, 1, 3, 5]
            ],
            [
                [],
                []
            ]
        ];

        foreach($tests as $test)
        {
            $this->assertEquals(invertArrayV2($test[0]),$test[1]);
        }
    }
}