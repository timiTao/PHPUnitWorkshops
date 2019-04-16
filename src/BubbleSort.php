<?php

declare(strict_types = 1);

class BubbleSort
{
    private static function cmp($a, $b)
    {
        if ($a == $b) {
            return 0;
        }
        return ($a < $b) ? -1 : 1;
    }

    public static function sort(array $data): array
    {
        usort($data, ['BubbleSort', 'cmp']);
        return $data;
    }
}
