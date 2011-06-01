<?php

require_once realpath(__DIR__ . '/../') . '/GreetingInterface.php';

/**
 * ReverseDecorator
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 */
class ReverseDecorator implements GreetingInterface
{
    /**
     * @var Greeting
     */
    private $_greeting;

    /**
     * Class construct
     *
     * @param GreetingInterface $greeting the greeting
     *
     * @return UpperClassDecorator
     */
    public function __construct(GreetingInterface $greeting)
    {
        $this->_greeting = $greeting;
    }

    /**
     * {@inheritdoc}
     */
    public function setName($name)
    {
        $this->_greeting->setName($name);
    }

    /**
     * {@inheritdoc}
     */
    public function sayHello()
    {
        return strrev($this->_greeting->sayHello());
    }
}