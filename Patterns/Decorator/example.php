<?php

ini_set('display_errors', 1);

require_once 'Greeting.php';
require_once 'Decorators/UpperClassDecorator.php';
require_once 'Decorators/ReverseDecorator.php';

$greeting  = new Greeting('Kevin');
echo $greeting->sayHello() . '<br />';

$decorator = new UpperClassDecorator($greeting);
echo $decorator->sayHello() . '<br />';

$decorator = new ReverseDecorator($greeting);
echo $decorator->sayHello() . '<br />';