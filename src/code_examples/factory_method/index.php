<?php

spl_autoload_register(static fn($class_name) => include $class_name . '.php');

$game = new Game(new KnightCreator());
