<?php

require_once 'ObserverInterface.php';

/**
 * Sylvester.
 *
 * Sylvester gets registered to the magazine as an observer
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 */
class Sylvester implements ObserverInterface
{
    public function notify()
    {
        echo 'Sylvester has been notified of an event';
    }
}