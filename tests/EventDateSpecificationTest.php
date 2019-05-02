<?php

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class EventDateSpecificationTest extends TestCase
{
    /**
     * @var EventDateSpecification
     */
    private $eventDateSpecification;

    /**
     * @var Bid | MockObject
     */
    private $bid;

    protected function setUp()
    {
        $this->eventDateSpecification = new EventDateSpecification();
        $this->bid = self::createMock(Bid::class);
    }

    public function testIsSatisfiedBy()
    {
        $now = new \DateTime();
        $tommorow = $now->modify('+1day')->format('Y-m-d');
        $eventDateTommorow = new EventDate($tommorow);

        $this->bid->expects(self::once())->method('getEventDate')->willReturn($eventDateTommorow);
        self::assertTrue($this->eventDateSpecification->isSatisfiedBy($this->bid));
    }

    public function testIsNotSatisfiedBy()
    {
        $eventDateOld = new EventDate('1970-01-01');
        $this->bid->expects(self::once())->method('getEventDate')->willReturn($eventDateOld);
        self::assertFalse($this->eventDateSpecification->isSatisfiedBy($this->bid));
    }
}
