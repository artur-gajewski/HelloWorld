<?php

namespace HelloWorld;

class Response
{
    /**
     * @var Array 
     */
    protected $params;

    /**
     * Set the Module specific configuration parameters
     */
    public function __construct($params) {
        $this->params = $params;
    }

    /**
     * Append prefix to the beginning of the name and return the string
     * 
     * @param String $name
     * @return String 
     */
    public function process($name) 
    {
        $prefix = $this->params['prefix'];
        return $prefix . " " . $name . "!";
    }
}