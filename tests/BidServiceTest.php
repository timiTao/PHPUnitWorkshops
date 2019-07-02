<?php

use PHPUnit\Framework\TestCase;

class BidServiceTest extends TestCase
{
    public function testShouldReturnTrueOnMakeBidService()
    {
        $now = new \DateTime();
        $tommorow = $now->modify('+1day')->format('Y-m-d');

        $client = new Client(new Country('Poland'));

        $specification = new AndSpecification(
            new EventDateSpecification(),
            new ClientSpecification($client)
        );

        $actual = BidService::makeBid(
            $client,
            new EventName('Football'),
            new EventDate($tommorow),
            new EventExchange(1.30),
            $specification
        );

        self::assertTrue($actual);
    }

    public function testShouldReturnFalseOnMakeBidWhenDateIsIncorrect()
    {
        $client = new Client(new Country('Poland'));

        $specification = new AndSpecification(
            new EventDateSpecification(),
            new ClientSpecification($client)
        );

        $actual = BidService::makeBid(
            $client,
            new EventName('Football'),
            new EventDate('2018-05-01'),
            new EventExchange(1.30),
            $specification
        );

        self::assertFalse($actual);
    }

    public function testShouldReturnFalseOnMakeBidWhenCountryIsIncorrect()
    {

        $client = new Client(new Country('USA'));

        $specification = new AndSpecification(
            new EventDateSpecification(),
            new ClientSpecification($client)
        );

        $actual = BidService::makeBid(
            $client,
            new EventName('Football'),
            new EventDate('2018-05-01'),
            new EventExchange(1.30),
            $specification
        );

        self::assertFalse($actual);
    }
}
