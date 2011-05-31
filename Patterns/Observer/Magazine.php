<?php

/**
 * Magazine.
 *
 * A magazine has many subscribers who observer when a new subscription is
 * available
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 * @link   https://github.com/kevbradwick/php-design-patterns
 *
 */
class Magazine
{
    /**
     * An array of observers registered to this magazine
     * @var array
     */
    private $_observers = array();
    
    /**
     * Add a new observer to this magazine
     * 
     * @param ObserverInterface $observer the observer
     */
    public function addObserver(ObserverInterface $observer)
    {
        $this->_observers[] = $observer;
    }
    
    /**
     * When this method gets called, each observer will be notified
     * 
     * @return null
     */
    public function onChange()
    {
        foreach ($this->_observers as $observer) {
            $observer->notify();
        }
    }
}