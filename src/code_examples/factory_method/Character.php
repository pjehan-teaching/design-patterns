<?php

abstract class Character
{
    private string $name;

    abstract public function getWeapon(): void;

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function greating(): void
    {
        echo "Hello, I am a {$this->getName()}.<br>";
    }

    public function useWeapon(): void
    {
        echo "The {$this->getName()} use his weapon!<br>";
    }
}