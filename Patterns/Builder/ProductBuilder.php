<?php

namespace Patterns\Builder;


/**
 * ProductBuilder
 */
class ProductBuilder
{
    /**
     * @var
     */
    protected $product;

    /**
     * @var array
     */
    protected $config = array();

    /**
     * @param array $config
     */
    public function __construct(array $config)
    {
        $this->product = new Product();
        $this->setConfig($config);
    }

    /**
     * Process some configuration parameters
     *
     * @param array $config
     */
    protected function setConfig(array $config)
    {
        $defaults = array(
            'colour' => 'blue',
            'size' => 100,
            'type' => false,
        );

        $config =  array_replace($defaults, $config);
        $this->config = $config;
    }

    /**
     * Build the product using the supplied configuration parameters
     *
     * @return null
     */
    public function build()
    {
        foreach ($this->config as $option => $value) {
            $method = sprintf('set%s', ucfirst($option));
            if (method_exists($this->product, $method) === true) {
                call_user_func(array($this->product, $method), $value);
            }
        }
    }

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }
}
