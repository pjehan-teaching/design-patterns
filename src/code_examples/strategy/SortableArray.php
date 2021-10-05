<?php

class SortableArray
{
    private array $values;
    private SortStrategy $strategy;

    public function __construct(array $values)
    {
        $this->values = $values;
    }

    public function getValues(): array
    {
        return $this->values;
    }

    public function setStrategy(SortStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function sort(): void
    {
        $this->values = $this->strategy->sort($this->values);
    }

    public function shuffle(): void
    {
       shuffle($this->values);
    }

    public function __toString(): string
    {
        $result = "";
        $size = count($this->values) - 1;

        foreach ($this->values as $key => $value) {
            $result .= $key === $size ? $value : "$value | ";
        }

        return "$result<br>";
    }
}