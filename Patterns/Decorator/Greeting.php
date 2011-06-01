<?php

require_once 'GreetingInterface.php';

/**
 * Greeting
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 */
class Greeting implements GreetingInterface
{
    /**
     * Holds reference to the name
     * @var string
     */
    private $_name;

    /**
     * Class construct
     *
     * @param string $name the name
     *
     * @return Greeting
     */
    public function __construct($name='')
    {
        $this->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * {@inheritdoc}
     */
    public function sayHello()
    {
        return 'Hello ' . $this->_name;
    }
}