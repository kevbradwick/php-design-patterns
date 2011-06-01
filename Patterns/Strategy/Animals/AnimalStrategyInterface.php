<?php

/**
 * AnimalStrategyInterface.
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 *
 */
interface AnimalStrategyInterface
{
    /**
     * An animal may make a noise
     *
     * @return string
     */
    public function makeNoise();

    /**
     * An animal can also move
     *
     * @return string
     */
    public function move();
}