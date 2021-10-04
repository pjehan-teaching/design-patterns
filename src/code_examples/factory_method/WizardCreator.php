<?php

class WizardCreator extends CharacterCreator
{
    public function create(): Character
    {
        return new Wizard();
    }
}