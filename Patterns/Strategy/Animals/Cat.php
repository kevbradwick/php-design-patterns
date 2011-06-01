<?php

require_once 'AnimalStrategyInterface.php';

/**
 * Cat.
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 *
 */
class Cat implements AnimalStrategyInterface
{
    /**
     * {@inheritdoc}
     *
     * @see AnimalStrategyInterface::makeNoise()
     */
    public function makeNoise()
    {
        return 'Meowwwww';
    }

    /**
     * {@inheritdoc}
     *
     * @see AnimalStrategyInterface::move()
     */
    public function move()
    {
        return 'walk';
    }
}