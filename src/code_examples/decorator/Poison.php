<?php

class Poison extends WeaponDecorator
{
    public function attack(): int
    {
        return $this->getWeapon()->attack() + 8;
    }
}