<?php

use PHPUnit\Framework\TestCase;

class ClientSpecificationTest extends TestCase
{
    /**
     * @var ClientSpecification
     */
    private $clientSpecification;

    protected function setUp()
    {
        $client = new Client(new Country('Poland'));
        $this->clientSpecification = new ClientSpecification($client);
    }

    public function testIsSatisfiedBy()
    {
        $client = new Client(new Country('Poland'));

        $bid = new Bid($client, new EventName('Football'), new EventDate('2019-05-01'), new EventExchange(1.30));
        self::assertTrue($this->clientSpecification->isSatisfiedBy($bid));
    }

    public function testIsNotSatisfiedBy()
    {
        $client = new Client(new Country('USA'));

        $bid = new Bid($client, new EventName('Football'), new EventDate('2019-01-01'), new EventExchange(1.30));
        self::assertFalse($this->clientSpecification->isSatisfiedBy($bid));
    }
}
