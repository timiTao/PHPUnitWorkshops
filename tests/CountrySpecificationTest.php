<?php

use PHPUnit\Framework\TestCase;

class CountrySpecificationTest extends TestCase
{
    /**
     * @var EventDateSpecification
     */
    private $countrySpecyfication;

    protected function setUp()
    {
        $this->countrySpecyfication = new CountrySpecification(new Country('Poland'));
    }

    public function testIsSatisfiedBy()
    {
        $bid = new Bid(new Client(new Country('Poland')), new EventName('Football'), new EventDate('2019-05-01'), new EventExchange(1.30));
        self::assertTrue($this->countrySpecyfication->isSatisfiedBy($bid));
    }

    public function testIsNotSatisfiedBy()
    {
        $bid = new Bid(new Client(new Country('USA')), new EventName('Football'), new EventDate('2019-01-01'), new EventExchange(1.30));
        self::assertFalse($this->countrySpecyfication->isSatisfiedBy($bid));
    }
}
