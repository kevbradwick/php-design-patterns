<?php

namespace Patterns\Strategy\Formats;

use Patterns\Strategy\CD;

interface FormatInterface
{
    /**
     * @abstract
     * @param CD $cd
     * @return mixed
     */
    public function get(CD $cd);
}
