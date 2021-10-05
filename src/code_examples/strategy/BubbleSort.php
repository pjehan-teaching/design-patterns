<?php

class BubbleSort implements SortStrategy
{
    public function sort(array $values): array
    {
        $size = count($values) - 1;

        for ($i = 0; $i < $size; $i++) {
            for ($j = 0; $j < $size - $i; $j++) {
                $k = $j + 1;
                if ($values[$k] < $values[$j]) {
                    // Swap elements at indices: $j, $k
                    list($values[$j], $values[$k]) = array($values[$k], $values[$j]);
                }
            }
        }

        return $values;
    }
}