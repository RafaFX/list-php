<?php
use PHPUnit\Framework\TestCase;

require_once __DIR__ . '/../list8/list8.php';

class List8Test extends TestCase
{
    function testRecursiveFor()
    {
        $tests = [
            [
                [1, 8, 13, 11, 1, 3, -2, -6, 5],
                [" 1 + 5 = 6 "," -2 + 8 = 6 "," 3 + 3 = 6 "]
            ]
        ];

        foreach($tests as $test)
        {
            $this->assertEquals(recursiveFor($test[0]),$test[1]);
        }
    }

    function testGetFOrmatedArray()
    {
        $tests = [
            [
                [2, 1, []],
                [' 1 + 2 = 6 ']
            ]
        ];

        foreach($tests as $test)
        {
            $this->assertEquals(getFormatedArray(...$test[0]),$test[1]);
        }
    }
}