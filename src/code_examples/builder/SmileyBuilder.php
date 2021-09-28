<?php

/**
 * L'interface permet d'imposer des étapes à définir dans les Builders
 */
interface SmileyBuilder
{
    public function buildEyes(): SmileyBuilder;
    public function buildNose(): SmileyBuilder;
    public function buildMouth(): SmileyBuilder;
}