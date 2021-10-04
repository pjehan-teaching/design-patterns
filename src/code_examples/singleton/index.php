<?php

spl_autoload_register(static fn($class_name) => include $class_name . '.php');

DbConnection::getInstance("mysql:dbname=mydb;host=127.0.0.1", "root", "root");
DbConnection::getInstance("mysql:dbname=mydb;host=127.0.0.1", "root", "root");
