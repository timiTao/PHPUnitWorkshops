<?php

use PHPUnit\Framework\TestCase;

class BidServiceTest extends TestCase
{
    public function testShouldReturnTrueOnMakeBidService()
    {
        $now = new \DateTime();
        $tommorow = $now->modify('+1day')->format('Y-m-d');

        $actual = BidService::makeBid(
            new Client(new Country('Poland')),
            new EventName('Football'),
            new EventDate($tommorow),
            new EventExchange(1.30)
        );

        self::assertTrue($actual);
    }

    public function testShouldReturnFalseOnMakeBidWhenDateIsIncorrect()
    {
        $actual = BidService::makeBid(
            new Client(new Country('Poland')),
            new EventName('Football'),
            new EventDate('2018-05-01'),
            new EventExchange(1.30)
        );

        self::assertFalse($actual);
    }

    public function testShouldReturnFalseOnMakeBidWhenCountryIsIncorrect()
    {
        $actual = BidService::makeBid(
            new Client(new Country('USA')),
            new EventName('Football'),
            new EventDate('2018-05-01'),
            new EventExchange(1.30)
        );

        self::assertFalse($actual);
    }
}
