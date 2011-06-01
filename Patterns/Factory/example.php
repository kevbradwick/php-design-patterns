<?php

require_once 'Cars.php';

$ferrari = CarFactory::getCar('ferrari');
$ford    = CarFactory::getCar('ford');

echo $ferrari->getManufacturer() . '<br />'; // Ferrari
echo $ferrari->getMake() . '<br />'; // F355
echo $ferrari->getModel() . '<br />'; // Berlinetta

echo $ford->getManufacturer() . '<br />'; // Ford
echo $ford->getMake() . '<br />'; // Focus
echo $ford->getModel() . '<br />'; // RS