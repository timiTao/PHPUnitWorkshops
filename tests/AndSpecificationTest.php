<?php

use PHPUnit\Framework\TestCase;

class AndSpecificationTest extends TestCase
{

    public function testShouldReturnTrueWhenTwoSpecAreReturnTrue()
    {
        $bid = new Bid(new Client(new Country('Poland')), new EventName('Football'), new EventDate('2019-05-01'), new EventExchange(1.30));
        $client = new Client(new Country('Poland'));

        $bidDateSpec = new EventDateSpecification();
        $clientSpec = new ClientSpecification($client);

        $andSpec = new AndSpecification($bidDateSpec, $clientSpec);

        self::assertTrue($andSpec->isSatisfiedBy($bid));
    }

    public function testShouldReturnFalseWhenOneOfSpecIsIncorrect()
    {
        $bid = new Bid(new Client(new Country('Poland')), new EventName('Football'), new EventDate('2019-05-01'), new EventExchange(1.30));
        $client = new Client(new Country('USA'));

        $bidDateSpec = new EventDateSpecification();
        $clientSpec = new ClientSpecification($client);

        $andSpec = new AndSpecification($bidDateSpec, $clientSpec);

        self::assertFalse($andSpec->isSatisfiedBy($bid));
    }
}
