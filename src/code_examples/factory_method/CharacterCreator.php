<?php

abstract class CharacterCreator
{
    abstract public function create(): Character;

    public function hello(): void
    {
        $character = $this->create();
        $character->greating();
        $character->getWeapon();
    }
}