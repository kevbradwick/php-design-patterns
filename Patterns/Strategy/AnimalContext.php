<?php

require_once 'Animals/AnimalStrategyInterface.php';

/**
 * AnimalContext.
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 *
 */
class AnimalContext implements AnimalStrategyInterface
{
    /**
     * The animal strategy
     * @var AnimalStrategyInterface
     */
    private $_strategy;

    /**
     * Creates a new animal
     *
     * @param string $animal the animal class
     *
     * @return AnimalContect
     */
    public function __construct($animal)
    {
        $class    = ucfirst($animal);
        $filename = __DIR__ . '/Animals/' . $class . '.php';

        if (file_exists($filename) === true) {
            require_once $filename;
            $this->_strategy = new $class;
        } else {
            throw new Exception('Animal not found');
        }
    }

    /**
     * make a noise
     *
     * @return string
     * @see AnimalStrategyInterface::makeNoise()
     */
    public function makeNoise()
    {
        return $this->_strategy->makeNoise();
    }

	/**
     * move
     *
     * @return string
     * @see AnimalStrategyInterface::move()
     */
    public function move()
    {
        return $this->_strategy->move();
    }
}