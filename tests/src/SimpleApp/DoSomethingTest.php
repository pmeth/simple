<?php

use PHPUnit\Framework\TestCase;
use SimpleApp\DoSomething;

class DoSomethingTest extends TestCase
{
    private $subject;

    public function setUp()
    {
        $this->subject = new DoSomething;
    }

    public function testDoSomething()
    {
        $this->assertEquals('there. I did something', $this->subject->doSomething());
    }
}
