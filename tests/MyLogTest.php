<?php

use PHPUnit\Framework\TestCase;
use Ivanov\MyLog;

class MyLogTest extends TestCase
{
    public function testLog() {
        $this->expectOutputString("This is a line equation!");
        MyLog::log("This is a line equation!");
        MyLog::write();
    }

    public function testInstance() {
        $this->assertInstanceOf(MyLog::class, MyLog::Instance());
    }
}