<?php

namespace Patterns\Builder;

class Product
{
    /**
     * @var string
     */
    protected $type = '';

    /**
     * @var string
     */
    protected $size = '';

    /**
     * @var string
     */
    protected $colour = '';

    /**
     * @param string $colour
     */
    public function setColour($colour)
    {
        $this->colour = $colour;
    }

    /**
     * @param string $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }
}