<?php

class Game
{
    public function __construct(CharacterCreator $creator)
    {
        $creator->hello();
    }
}