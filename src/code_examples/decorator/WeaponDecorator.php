<?php

abstract class WeaponDecorator implements Weapon
{
    private Weapon $weapon;

    public function __construct(Weapon $weapon)
    {
        $this->setWeapon($weapon);
    }

    protected function getWeapon(): Weapon
    {
        return $this->weapon;
    }

    private function setWeapon(Weapon $weapon): void
    {
        $this->weapon = $weapon;
    }
}