<?php

require_once 'AnimalStrategyInterface.php';

/**
 * Horse.
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 *
 */
class Horse implements AnimalStrategyInterface
{
    /**
     * {@inheritdoc}
     *
     * @see AnimalStrategyInterface::makeNoise()
     */
    public function makeNoise()
    {
        return 'phrrrrrr.....phrrrrrrrr';
    }

    /**
     * {@inheritdoc}
     *
     * @see AnimalStrategyInterface::move()
     */
    public function move()
    {
        return 'gallop';
    }
}