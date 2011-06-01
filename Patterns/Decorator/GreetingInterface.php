<?php

/**
 * GreetingInterface
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 */
interface GreetingInterface
{
    /**
     * Set the name
     *
     * @param string $name the name
     *
     * @return null
     */
    public function setName($name);

    /**
     * Say hello!
     *
     * @return string
     */
    public function sayHello();
}