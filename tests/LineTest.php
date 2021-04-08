<?php

use PHPUnit\Framework\TestCase;
use Ivanov\IvanovException;
use Ivanov\Line;

class LineTest extends TestCase
{
    public function testLine()
    {
        $line = new Line();
        $this->assertEquals([-12], $line->line(6, 72));
        $this->assertEquals([1], $line->line(-1, 1));
    }

    public function testLineBad()
    {
        $line = new Line();
        $this->expectExceptionMessage('This line equation does not exist!');
        $this->expectException(IvanovException::class);
        $line->line(0, -7);
        $line->line(0, 2);
    }
}