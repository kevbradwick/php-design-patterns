<?php

require_once 'CarInterface.php';

/**
 * Ferrari
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 */
class Ferrari implements CarInterface
{
    /**
     * {@inheritdoc}
     * 
     * @return string
     */
    public function getModel()
    {
        return 'Berlinetta';
    }

    /**
     * {@inheritdoc}
     * 
     * @return string
     */
    public function getManufacturer()
    {
        return 'Ferrari';
    }

    /**
     * {@inheritdoc}
     * 
     * @return string
     */
    public function getMake()
    {
        return 'F355';
    }
}