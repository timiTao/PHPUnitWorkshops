<?php

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class AndSpecificationTest extends TestCase
{
    /** @var Bid | MockObject */
    private $bid;
    /** @var EventDateSpecification */
    private $bidDateSpec;

    protected function setUp()
    {
        $this->bid = self::createMock(Bid::class);
        $this->bidDateSpec = new EventDateSpecification();
    }

    public function testShouldReturnTrueWhenTwoSpecAreReturnTrue()
    {
        $now = new \DateTime();
        $tommorow = $now->modify('+1day')->format('Y-m-d');
        $client = new Client(new Country('Poland'));

        $this->bid->method('getEventDate')->willReturn(new EventDate($tommorow));
        $this->bid->method('getClient')->willReturn($client);

        $clientSpec = new ClientSpecification($client);
        $andSpec = new AndSpecification($this->bidDateSpec, $clientSpec);

        self::assertTrue($andSpec->isSatisfiedBy($this->bid));
    }

    public function testShouldReturnFalseWhenOneOfSpecIsIncorrect()
    {
        $this->bid->method('getEventDate')->willReturn(new EventDate('1970-01-01'));
        $this->bid->method('getClient')->willReturn(new Client(new Country('Poland')));

        $client = new Client(new Country('USA'));
        $clientSpec = new ClientSpecification($client);
        $andSpec = new AndSpecification($this->bidDateSpec, $clientSpec);

        self::assertFalse($andSpec->isSatisfiedBy($this->bid));
    }
}
