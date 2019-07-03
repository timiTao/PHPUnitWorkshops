<?php

use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class AndSpecificationTest extends TestCase
{
    /** @var Bid | MockObject */
    private $bid;
    /** @var SpecificationInterface | MockObject $specificationInterfaceMock */
    private $specificationInterfaceMock;

    protected function setUp()
    {
        $this->bid = self::createMock(Bid::class);
        $this->specificationInterfaceMock = self::createMock(SpecificationInterface::class);
    }

    public function testShouldReturnTrueWhenTwoSpecAreReturnTrue()
    {
        $this->specificationInterfaceMock->method('isSatisfiedBy')->willReturn(true);

        $andSpec = new AndSpecification($this->specificationInterfaceMock, $this->specificationInterfaceMock);

        self::assertTrue($andSpec->isSatisfiedBy($this->bid));
    }

    public function testShouldReturnFalseWhenOneOfSpecIsIncorrect()
    {
        /** @var SpecificationInterface | MockObject $specificationInterfaceInvalidMock */
        $specificationInterfaceInvalidMock = self::createMock(SpecificationInterface::class);
        $specificationInterfaceInvalidMock->method('isSatisfiedBy')->willReturn(false);

        $andSpec = new AndSpecification($specificationInterfaceInvalidMock, $this->specificationInterfaceMock);

        self::assertFalse($andSpec->isSatisfiedBy($this->bid));
    }
}
