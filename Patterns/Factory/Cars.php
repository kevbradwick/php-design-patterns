<?php

/**
 * CarFactory.
 *
 * The car factory controls the instantiation of car objects. It provides a
 * single method by which to get any type of car!
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 *
 */
class CarFactory
{
    /**
     * The factory method to get a car
     *
     * @param string $make the make of car
     *
     * @return CarInterface
     * @throws Exception
     */
    public static function getCar($make='')
    {
        $class    = ucfirst($make);
        $filename = sprintf('%s/Cars/%s.php', __DIR__, $class);

        if (file_exists($filename)) {
            require_once $filename;
            return new $class;
        } else {
            throw new Exception('Car not found!');
        }
    }
}