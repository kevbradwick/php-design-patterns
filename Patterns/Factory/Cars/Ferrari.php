<?php

require_once 'CarInterface.php';

class Ferrari implements CarInterface
{
    public function getModel()
    {
        return 'F355';
    }

    public function getManufacturer()
    {
        return 'Ferrari';
    }

    public function getMake()
    {

    }
}