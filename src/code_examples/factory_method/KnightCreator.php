<?php

class KnightCreator extends CharacterCreator
{
    public function create(): Character
    {
        return new Knight();
    }
}