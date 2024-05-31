<?php

require_once "Person.php";
require_once "Personne.php";
require_once "PersonneAdapter.php";

function sayHello(Person $person): void
{
    echo "Hello {$person->getFirstName()} {$person->getLastName()}" . PHP_EOL;
}

$personne = new Personne("Doe", "John");
$person = new PersonneAdapter($personne);
sayHello($person);