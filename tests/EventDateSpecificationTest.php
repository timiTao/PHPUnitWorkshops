<?php

use PHPUnit\Framework\TestCase;

class EventDateSpecificationTest extends TestCase
{
    /**
     * @var EventDateSpecification
     */
    private $eventDateSpecification;

    protected function setUp()
    {
        $this->eventDateSpecification = new EventDateSpecification();
    }

    public function testIsSatisfiedBy()
    {
        $bid = new Bid(new EventName('Football'), new EventDate('2019-05-01'), new EventExchange(1.30));
        self::assertTrue($this->eventDateSpecification->isSatisfiedBy($bid));
    }

    public function testIsNotSatisfiedBy()
    {
        $bid = new Bid(new EventName('Football'), new EventDate('2019-01-01'), new EventExchange(1.30));
        self::assertFalse($this->eventDateSpecification->isSatisfiedBy($bid));
    }
}
