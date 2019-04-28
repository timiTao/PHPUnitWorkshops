<?php

use PHPUnit\Framework\TestCase;

class EventDateTest extends TestCase
{
        public function testShouldCreateValidEventDate()
        {
            $now = new \DateTime();
            $formatedNow = $now->format('Y-m-d');
            $eventDate = new EventDate($formatedNow);
            self::assertEquals($formatedNow, $eventDate->getDate()->format('Y-m-d'));
        }
}
