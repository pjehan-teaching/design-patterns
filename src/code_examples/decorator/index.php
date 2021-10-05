<?php

spl_autoload_register(static fn($class_name) => include $class_name . '.php');

$bow = new Bow();
$bowWithFire = new Fire($bow);
echo $bowWithFire->attack();
echo "<br>";

$bowWithFireAndPoison = new Poison($bowWithFire);
echo $bowWithFireAndPoison->attack();
echo "<br>";