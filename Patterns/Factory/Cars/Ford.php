<?php

require_once 'CarInterface.php';

/**
 * Ford
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 */
class Ford implements CarInterface
{
    /**
     * {@inheritdoc}
     * 
     * @return string
     */
    public function getModel()
    {
        return 'RS';
    }

    /**
     * {@inheritdoc}
     * 
     * @return string
     */
    public function getManufacturer()
    {
        return 'Ford';
    }

    /**
     * {@inheritdoc}
     * 
     * @return string
     */
    public function getMake()
    {
        return 'Focus';
    }
}