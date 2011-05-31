<?php

/**
 * Singleton.
 *
 * There can only be once instance of a singleton class, and its instantiation
 * is controlled by a static method that returns that instance.
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 *
 */
class Singleton
{
    /**
     * A static variable that holds reference to itself
     * @var Singleton
     */
    private static $_instance;

    /**
     * A private constructor ensures it can only be instantiated by itself
     *
     * @return Singleton
     */
    private function __construct() {}

    /**
     * A static method that return an instance of itself
     *
     * @return Singleton
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new self();
        }

        return self::$_instance;
    }
}