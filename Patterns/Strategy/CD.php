<?php

namespace Patterns\Strategy;

/**
 * This CD class implements the strategy pattern. A strategy context must be
 * set in order to get the string formatted CD.
 *
 * @author Kevin Bradwick <kbradwick@gmail.com>
 */
class CD
{
    /**
     * @var string
     */
    protected $artist;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var Formats\FormatInterface
     */
    protected $strategy;

    /**
     * Create a new CD object
     *
     * @param string $artist
     * @param string $title
     */
    public function __construct($artist, $title)
    {
        $this->artist = $artist;
        $this->title = $title;
    }

    /**
     * Set the strategy context
     *
     * @param Formats\FormatInterface $context
     */
    public function setStrategyContext(Formats\FormatInterface $context)
    {
        $this->strategy = $context;
    }

    /**
     * Get the cd using the context
     *
     * @return string
     */
    public function get()
    {
        return $this->strategy->get($this);
    }

    /**
     * @return string
     */
    public function getArtist()
    {
        return $this->artist;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

}
