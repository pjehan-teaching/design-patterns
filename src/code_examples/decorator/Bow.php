<?php

class Bow implements Weapon
{
    private int $power = 30;

    public function attack(): int
    {
        return $this->power;
    }
}