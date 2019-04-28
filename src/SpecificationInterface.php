<?php

interface SpecificationInterface
{
    public function isSatisfiedBy(Bid $bid): bool;
}