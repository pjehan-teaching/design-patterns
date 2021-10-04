<?php

class Wizard extends Character
{
    public function __construct()
    {
        $this->setName("Wizard");
    }

    public function getWeapon(): void
    {
        echo "The wizard take his wand.<br>";
    }
}