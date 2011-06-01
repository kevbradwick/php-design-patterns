<?php

require_once 'Magazine.php';
require_once 'Observers/Charlie.php';
require_once 'Observers/Sylvester.php';

// our observerable object
$magazine   = new Magazine();

// our observers
$observer_a = new Charlie();
$observer_b = new Sylvester();

// register the observers
$magazine->addObserver($observer_a);
$magazine->addObserver($observer_b);

// trigger the event to call the observers
$magazine->onChange();
