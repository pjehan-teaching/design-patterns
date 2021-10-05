<?php

spl_autoload_register(static fn($class_name) => include $class_name . '.php');

$array = new SortableArray([1, 2, 3, 4, 5, 6, 7, 8, 9]);
$array->shuffle();
echo $array;

echo "BubbleSort<br>";
$array->setStrategy(new BubbleSort());
$array->sort();
echo $array;

$array->shuffle();
echo $array;
echo "InsertionSort<br>";
$array->setStrategy(new InsertionSort());
$array->sort();
echo $array;

$array->shuffle();
echo $array;
echo "ShellSort<br>";
$array->setStrategy(new ShellSort());
$array->sort();
echo $array;

