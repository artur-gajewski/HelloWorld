<?php

namespace HelloWorld;

use Zend\ServiceManager\ServiceManager;
use Zend\ServiceManager\ServiceManagerAwareInterface;

class Response implements ServiceManagerAwareInterface
{
    /**
     * @var ServiceManager 
     */
    protected $services;

    /**
     * @var Array 
     */
    protected $params;

    /**
     * Set the ServiceManager for this class in order to fetch configurations
     * 
     * @param ServiceManager $serviceManager 
     */
    public function setServiceManager(ServiceManager $serviceManager)
    {
        $this->services = $serviceManager;
        $this->setModuleParams();
    }
    
    /**
     * Set the Module specific configuration parameters into array 
     */
    protected function setModuleParams() {
        $config = $this->services->get('Config');
        $this->params = $config['HelloWorld']['params'];
    }

    /**
     * Process the string and return it
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