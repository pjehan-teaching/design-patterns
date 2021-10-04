<?php

class Knight extends Character
{
    public function __construct()
    {
        $this->setName("Knight");
    }

    public function getWeapon(): void
    {
        echo "The knight take his sword.<br>";
    }
}