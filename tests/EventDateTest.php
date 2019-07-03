<?php

use PHPUnit\Framework\TestCase;

class EventDateTest extends TestCase
{
    /** @var DateTime */
    private $now;

    protected function setUp()
    {
        $this->now = new \DateTime();
    }

    public function testShouldCreateValidEventDate()
    {
        $dateNow = $this->now->format('Y-m-d');
        $eventDate = new EventDate($dateNow);
        self::assertEquals($dateNow, $eventDate->getDate()->format('Y-m-d'));
    }

    public function testShouldThrowExceptionWhenDateTimeFormatIsInvalid()
    {
        self::expectException(InvalidArgumentException::class);
        $dateNow = $this->now->format('Y-m-d H:i:s');
        new EventDate($dateNow);
    }
}
