<?php

require_once 'AnimalContext.php';

$animal = new AnimalContext('Cat');
echo $animal->makeNoise(); // Meowwwww
echo $animal->move(); // walk

$animal = new AnimalContext('Horse');
echo $animal->makeNoise(); // phrrrrrr.....phrrrrrrrr
echo $animal->move(); // gallop