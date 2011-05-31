<?php

/**
 * A car interface all cars implement
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 */
interface CarInterface
{
    /**
     * The vehicle manufaturer
     *
     * @return string
     */
    public function getManufacturer();

    /**
     * The vehicle make
     *
     * @return string
     */
    public function getMake();

    /**
     * The vehicle model
     *
     * @return string
     */
    public function getModel();
}