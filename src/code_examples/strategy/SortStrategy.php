<?php

interface SortStrategy
{
    public function sort(array $values): array;
}