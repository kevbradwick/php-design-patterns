<?php

namespace Patterns\Adapter;

/**
 * DetailedErrorAdapter.
 *
 * This adapter will extract the error code and expose it through a public method
 */
class DetailedErrorAdapter extends ErrorObject
{
    /**
     * @var int
     */
    private $_errorCode = 200;

    /**
     * @var string
     */
    private $_errorMessage = '';

    /**
     * @param $message
     */
    public function __construct($message)
    {
        parent::__construct($message);
        $pattern = '/^(?P<code>\d+):(?P<message>[a-zA-Z\s]+)$/';
        preg_match($pattern, $message, $match);
        if (isset($match['code']) === true) {
            $this->_errorCode = (int) $match['code'];
        }

        if (isset($match['message']) === true) {
            $this->_errorMessage = $match['message'];
        }
    }

    /**
     * Get the error code
     *
     * @return int
     */
    public function getErrorCode()
    {
        return $this->_errorCode;
    }
}
