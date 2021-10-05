<?php

class InsertionSort implements SortStrategy
{
    public function sort(array $values): array
    {
        $size = count($values);

        for ($i = 0; $i < $size; $i++) {
            $val = $values[$i];
            $j = $i - 1;
            while ($j >= 0 && $values[$j] > $val) {
                $values[$j + 1] = $values[$j];
                $j--;
            }
            $values[$j + 1] = $val;
        }

        return $values;
    }
}