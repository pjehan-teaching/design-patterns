<?php

/**
 * Builder pour créer un smiley sad
 */
class SadSmileyBuilder implements SmileyBuilder
{

    private string $face = "";

    public function buildEyes(): SmileyBuilder
    {
        $this->addToFace("  o   o. ");
        return $this;
    }

    public function buildNose(): SmileyBuilder
    {
        $this->addToFace("    l    ");
        return $this;
    }

    public function buildMouth(): SmileyBuilder
    {
        $this->addToFace("  .---.  ");
        $this->addToFace(" '     ' ");
        return $this;
    }

    private function addToFace(string $part): void
    {
        $this->face .= "$part<br>";
    }

    public function reset(): void
    {
        $this->face = "";
    }

    public function getResult(): Smiley
    {
        $smiley = new Smiley();
        $smiley->setFace($this->face);
        $this->reset(); // Reset the smiley builder for the next smiley
        return $smiley;
    }

}