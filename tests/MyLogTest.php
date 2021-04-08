<?php

use PHPUnit\Framework\TestCase;
use Ivanov\MyLog;

class MyLogTest extends TestCase
{

    public function testWrite()
    {

        $this->assertEquals('', MyLog::write("Testing"));
        $this->assertEquals('', MyLog::write(1234));
        $this->assertEquals('', MyLog::write());

    }

    public function testMyLogEx()
    {
        $this->expectException(TypeError::class);
        $this->assertEquals('', MyLog::log());
        $this->assertEquals('', MyLog::log(null));
    }

    public function testMyLog()
    {
        $this->assertEquals('', MyLog::log(1234));
        $this->assertEquals('', MyLog::log(false));
        $this->assertEquals('', MyLog::log("Testing"));
    }
}