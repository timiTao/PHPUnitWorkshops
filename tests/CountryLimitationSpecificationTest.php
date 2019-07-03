<?php

use PHPUnit\Framework\TestCase;

class CountryLimitationSpecificationTest extends TestCase
{
    /** @var CountryLimitationSpecification */
    private $clientSpecification;

    /** @var Bid | \PHPUnit\Framework\MockObject\MockObject $bidMock */
    private $bidMock;

    protected function setUp()
    {
        $this->clientSpecification = new CountryLimitationSpecification(
            new Client(new Country('Poland'))
        );

        $this->bidMock = self::createMock(Bid::class);
    }

    public function testIsSatisfiedBy()
    {
        $this->bidMock->method('getClient')
            ->willReturn(new Client(new Country('Poland')));

        self::assertTrue($this->clientSpecification->isSatisfiedBy($this->bidMock));
    }

    public function testIsNotSatisfiedBy()
    {
        $this->bidMock->method('getClient')
            ->willReturn(new Client(new Country('United States')));

        self::assertFalse($this->clientSpecification->isSatisfiedBy($this->bidMock));
    }
}
