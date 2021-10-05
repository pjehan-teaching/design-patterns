<?php

spl_autoload_register(static fn($class_name) => include $class_name . '.php');

$dev = new Sprint();
$writingCode = new Sprint();
$testingCode = new Sprint();

$dev->add($writingCode);
$dev->add($testingCode);

$installation = new Task(60, 50);
$authentication = new Task(120, 100);
$writingCode->add($installation);
$writingCode->add($authentication);

$testingAuth = new Task(30, 25);
$testingCode->add($testingAuth);

echo "Dev total cost: {$dev->getCost()}€ <br>";
echo "Dev total duration: {$dev->getDuration()} minutes<br>";