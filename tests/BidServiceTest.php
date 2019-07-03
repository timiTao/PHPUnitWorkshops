<?php

use PHPUnit\Framework\TestCase;

class BidServiceTest extends TestCase
{
    public function testShouldReturnTrueOnMakeBidService()
    {
        $specification = new AndSpecification(
            new EventDateSpecification(),
            new CountryLimitationSpecification(new Client(new Country('Poland')))
        );

        $actual = BidService::makeBid(
            new Client(new Country('Poland')),
            new EventName('Football'),
            new EventDate(self::getTommorowDate()),
            new EventExchange(1.30),
            $specification
        );

        self::assertTrue($actual);
    }

    public function testShouldReturnFalseOnMakeBidWhenDateIsIncorrect()
    {
        $specification = new AndSpecification(
            new EventDateSpecification(),
            new CountryLimitationSpecification(new Client(new Country('Poland')))
        );

        $actual = BidService::makeBid(
            new Client(new Country('Poland')),
            new EventName('Football'),
            new EventDate('2018-05-01'),
            new EventExchange(1.30),
            $specification
        );

        self::assertFalse($actual);
    }

    public function testShouldReturnFalseOnMakeBidWhenCountryIsIncorrect()
    {
        $specification = new AndSpecification(
            new EventDateSpecification(),
            new CountryLimitationSpecification(new Client(new Country('USA')))
        );

        $actual = BidService::makeBid(
            new Client(new Country('Poland')),
            new EventName('Football'),
            new EventDate(self::getTommorowDate()),
            new EventExchange(1.30),
            $specification
        );

        self::assertFalse($actual);
    }

    private static function getTommorowDate(): string
    {
        $now = new \DateTime();
        return $now->modify('+1day')->format('Y-m-d');
    }
}
