<?php

namespace Patterns\Adapter;

/**
 * Echo out the message instead. But also set the headers.
 * This class need an adapted version of the ErrorObject so that it can obtain
 * the status code.
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 */
class EchoLog
{
    /**
     * @var ErrorObject
     */
    private $_error;

    /**
     * Logger takes a standard ErrorObject or a descendant of
     *
     * @param ErrorObject $error
     */
    public function __construct(ErrorObject $error)
    {
        $this->_error = $error;
    }

    /**
     * Write out the error
     *
     * @return null
     */
    public function write()
    {
        header(sprintf('HTTP/1.0 %d %s', $this->_error->getErrorCode(), $this->_error->getError()));
        echo $this->_error->getError();
    }
}
