<?php

class Sprint implements Activity
{
    /** @var Activity[] $activities  */
    private array $activities;

    public function getDuration(): int
    {
        return array_reduce($this->activities, fn(int $total, Activity $activity) => $total + $activity->getDuration(), 0);
    }

    public function getCost(): float
    {
        return array_reduce($this->activities, fn(int $total, Activity $activity) => $total + $activity->getCost(), 0);
    }

    public function add(Activity $activity): void
    {
        $this->activities[] = $activity;
    }

    public function remove(Activity $activity): void
    {
        $this->activities = array_diff($this->activities, [$activity]);
    }
}