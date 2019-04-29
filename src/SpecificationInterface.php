<?php

declare(strict_types=1);

interface SpecificationInterface
{
    public function isSatisfiedBy(Bid $bid): bool;
}