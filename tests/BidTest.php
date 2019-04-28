<?php

use PHPUnit\Framework\TestCase;

class BidTest extends TestCase
{
    /** @var Bid */
    private $bid;

    protected function setUp()
    {
        $this->bid = new Bid(new EventName('Football'), new EventDate('2019-05-01'), new EventExchange(1.30));
    }

    public function testShouldReturnEventNameFromCreatedBid()
    {
        self::assertEquals('Football', $this->bid->getEventName());
        self::assertInstanceOf(EventName::class, $this->bid->getEventName());
    }

    public function testShouldReturnEventExchangeFromCreatedBid()
    {
        self::assertEquals(1.30, $this->bid->getEventExchange()->getValue());
        self::assertInstanceOf(EventExchange::class, $this->bid->getEventExchange());
    }

    public function testShouldReturnEventDateFromCreatedBid()
    {
        self::assertInstanceOf(DateTime::class, $this->bid->getEventDate()->getDate());
        self::assertInstanceOf(EventDate::class, $this->bid->getEventDate());
    }
}
