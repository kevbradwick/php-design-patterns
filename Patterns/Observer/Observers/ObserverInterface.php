<?php

/**
 * ObserverInterface.
 *
 * Each observer must implement this interface to get notified
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 */
interface ObserverInterface
{
    /**
     * This method gets called when an event occurs
     * 
     * @return string
     */
    public function notify();
}