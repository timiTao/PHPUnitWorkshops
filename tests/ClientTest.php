<?php

use PHPUnit\Framework\TestCase;

class ClientTest extends TestCase
{
    public function testShouldCreateClientWithCountry()
    {
        $client = new Client(new Country('Poland'));

        self::assertEquals('Poland', $client->getCountry());
    }
}
