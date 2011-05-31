<?php

require_once 'ObserverInterface.php';

/**
 * Charlie.
 *
 * Charlie gets registered to the magazine as an observer
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 */
class Charlie implements ObserverInterface
{
    public function notify()
    {
        echo 'Charlie has been notified of an event';
    }
}