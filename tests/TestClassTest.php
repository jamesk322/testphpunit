<?php

class TestClassTest extends PHPUnit_Framework_TestCase
{
    public function testHelloWorld()
    {
        $test = new \Test\TestClass();
        $this->assertEquals("Hello World: Jim", $test->helloWorld("Jim"));
    }
}