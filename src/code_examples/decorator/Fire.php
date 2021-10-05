<?php

class Fire extends WeaponDecorator
{
    public function attack(): int
    {
        return $this->getWeapon()->attack() + 10;
    }
}