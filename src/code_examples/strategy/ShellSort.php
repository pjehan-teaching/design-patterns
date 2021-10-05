<?php

class ShellSort implements SortStrategy
{
    public function sort(array $values): array
    {
        $size = count($values);
        $inc = round($size / 2);

        while ($inc > 0) {
            for ($i = $inc; $i < $size; $i++) {
                $temp = $values[$i];
                $j = $i;
                while ($j >= $inc && $values[$j - $inc] > $temp) {
                    $values[$j] = $values[$j - $inc];
                    $j -= $inc;
                }
                $values[$j] = $temp;
            }
            $inc = round($inc / 2.2);
        }

        return $values;
    }
}