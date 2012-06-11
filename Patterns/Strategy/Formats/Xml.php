<?php

namespace Patterns\Strategy\Formats;

use Patterns\Strategy\CD;

/**
 * XML Formatter
 *
 * @author  Kevin Bradwick <kbradwick@gmail.com>
 */
class Xml implements FormatInterface
{
    /**
     * @param CD $cd
     * @return mixed|void
     */
    public function get(CD $cd)
    {
        $document = new \DOMDocument();
        $root = $document->createElement('CD');
        $root = $document->appendChild($root);
        $title = $document->createElement('TITLE', $cd->getTitle());
        $root->appendChild($title);
        $band = $document->createElement('ARTIST', $cd->getArtist());
        $root->appendChild($band);

        return $document->saveXML();
    }
}
