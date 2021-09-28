<?php

/**
 * Classe définissant les différents types de smileys à créer
 */
class Director
{

    private SmileyBuilder $builder;

    public function setBuilder(SmileyBuilder $builder): void
    {
        $this->builder = $builder;
    }

    public function buildSimpleSmiley(): void
    {
        $this->builder->buildEyes();
        $this->builder->buildMouth();
    }

    public function buildCompleteSmiley(): void
    {
        $this->builder->buildEyes();
        $this->builder->buildNose();
        $this->builder->buildMouth();
    }

}