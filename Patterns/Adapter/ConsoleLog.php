<?php

namespace Patterns\Adapter;

/**
 * A basic console logger
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 */
class ConsoleLog
{
    /**
     * @var ErrorObject
     */
    private $_error;

    /**
     * Log an error message to the console
     *
     * @param ErrorObject $error
     */
    public function __construct(ErrorObject $error)
    {
        $this->_error = $error;
    }

    /**
     * Writes the error message to stdout
     *
     * @return null
     */
    public function write()
    {
        $fp = fopen('php://stdout', 'w');
        fwrite($fp, $this->_error->getError());
        fclose($fp);
    }
}
