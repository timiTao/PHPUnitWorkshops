<?php

use PHPUnit\Framework\TestCase;

class EventNameTest extends TestCase
{
    public function testShouldCreateValidEventName()
    {
        self::assertEquals('Football', new EventName('Football'));
    }

    public function testShouldThrowExceptionWhenArgumentIsEmpty()
    {
        self::expectException(InvalidArgumentException::class);

        new EventName('');
    }
}
