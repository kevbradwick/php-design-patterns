<?php

namespace Patterns\Adapter;

/**
 * A typical error object
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 */
class ErrorObject
{
    /**
     * @var string
     */
    private $_errorMessage = '';

    /**
     * @param $errorMessage
     */
    public function __construct($errorMessage)
    {
        $this->_errorMessage = $errorMessage;
    }

    /**
     * @return string
     */
    public function getError()
    {
        return $this->_errorMessage;
    }
}
