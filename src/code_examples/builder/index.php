<?php

spl_autoload_register(static fn($class_name) => include $class_name . '.php');

$director = new Director();
$happyBuilder = new HappySmileyBuilder();
$director->setBuilder($happyBuilder);

$director->buildSimpleSmiley();
$happyBuilder->getResult()->display();

$director->buildCompleteSmiley();
$happyBuilder->getResult()->display();


$sadBuilder = new SadSmileyBuilder();
$director->setBuilder($sadBuilder);

$director->buildCompleteSmiley();
$sadBuilder->getResult()->display();