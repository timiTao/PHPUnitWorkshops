<?php

declare(strict_types = 1);

use PHPUnit\Framework\TestCase;

class BubbleSortTest extends TestCase
{
    public function testSort()
    {
        self::assertEquals([1, 3, 13], BubbleSort::sort([13, 1, 3]));
    }
}
