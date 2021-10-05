<?php

class Sword implements Weapon
{
    private int $power = 50;

    public function attack(): int
    {
        return $this->power;
    }
}