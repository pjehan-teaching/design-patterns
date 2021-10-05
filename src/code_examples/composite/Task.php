<?php

class Task implements Activity
{
    private int $duration;
    private float $cost;

    public function __construct(int $duration, float $cost)
    {
        $this->setDuration($duration);
        $this->setCost($cost);
    }

    public function getDuration(): int
    {
        return $this->duration;
    }

    public function setDuration(int $duration): void
    {
        $this->duration = $duration;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function setCost(float $cost): void
    {
        $this->cost = $cost;
    }
}