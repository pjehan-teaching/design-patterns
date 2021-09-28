<?php

/**
 * Objet principal à construire avec les Builders
 */
class Smiley
{
    private string $face;

    public function getFace(): string
    {
        return $this->face;
    }

    public function setFace(string $face): void
    {
        $this->face = $face;
    }

    public function display(): void
    {
        echo "<pre style='display: flex; align-items: center; justify-content: center; height: 80px; width: 80px; background-color: yellow; border-radius: 100%;'>";
        echo $this->getFace();
        echo "</pre>";
    }
}