<?php

require_once 'Singleton.php';

$object_a = Singleton::getInstance();
$object_b = Singleton::getInstance();

var_dump($object_a === $object_b); // boolean(true)