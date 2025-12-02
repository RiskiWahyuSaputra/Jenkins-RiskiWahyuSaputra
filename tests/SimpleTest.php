<?php
use PHPUnit\Framework\TestCase;

class SimpleTest extends TestCase
{
    public function testAdditionIsCorrect()
    {
        $this->assertEquals(4, 2 + 2);
    }
}
