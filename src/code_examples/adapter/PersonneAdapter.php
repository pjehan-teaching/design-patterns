<?php

require_once "Person.php";
require_once "Personne.php";

class PersonneAdapter extends Person
{

    public function __construct(
        private Personne $personne
    ) {}

    public function getFirstName(): string
    {
        return $this->personne->getPrenom();
    }

    public function getLastName(): string
    {
        return $this->personne->getNom();
    }

    public function setFirstName(string $firstName)
    {
        $this->personne->setPrenom($firstName);
    }

    public function setLastName(string $lastName)
    {
        $this->personne->setNom($lastName);
    }

}