<?php

use PHPUnit\Framework\TestCase;

class EventExchangeTest extends TestCase
{
    public function testShouldValidExchange()
    {
        $actual = new EventExchange(1.29);
        self::assertEquals(1.29, $actual->getValue());
    }
}
