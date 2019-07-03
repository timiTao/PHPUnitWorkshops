<?php

use PHPUnit\Framework\TestCase;

class EventExchangeTest extends TestCase
{
    public function testShouldValidExchange()
    {
        $actual = new EventExchange(1.29);
        self::assertEquals(1.29, $actual->getValue());
    }

    public function testThrowExceptionWhenExchangeValueIsLowerThanOneAndBiggerThanZero()
    {
        self::expectException(InvalidArgumentException::class);
        new EventExchange(0.4);
    }

    public function testThrowExceptionWhenExchangeValueIsLowerThanZero()
    {
        self::expectException(InvalidArgumentException::class);
        new EventExchange(-2.4);
    }
}
