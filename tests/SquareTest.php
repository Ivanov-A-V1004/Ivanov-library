<?php

use PHPUnit\Framework\TestCase;
use Ivanov\IvanovException;
use Ivanov\Square;

class SquareTest extends TestCase
{
    public function testSquareBad()
    {
        $squareEx = new Square();
        $this->expectExceptionMessage("This square equation does not exist!");
        $this->expectException(IvanovException::class);
        $squareEx->solve(4, 0, 8);
        $squareEx->solve(4, 2, 1);
    }

    public function testSquare()
    {
        $square = new Square();
        $this->assertEquals([5, -5], $square->solve(-3, 0, 75));
        $this->assertEquals([-3], $square->solve(0, 3, 9));
        $this->assertEquals([-3], $square->solve(1, 6, 9));
    }
}