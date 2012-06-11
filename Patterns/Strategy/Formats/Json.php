<?php

namespace Patterns\Strategy\Formats;

use Patterns\Strategy\CD;

/**
 * Json Formatter
 *
 * @author  Kevin Bradwick <kbradwick@gmail.com>
 */
class Json implements FormatInterface
{
    /**
     * @param CD $cd
     * @return mixed
     */
    public function get(CD $cd)
    {
        $output['cd'] = array(
            'artist' => $cd->getArtist(),
            'title' => $cd->getTitle(),
        );

        return json_encode($output);
    }
}
