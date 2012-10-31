<?php

/** @phpstub */
class Yaf_Router
{
    protected $_routes;
    protected $_current;

    /**
     * Yaf_Router constructor
     */
    public function __construct()
    {
    }

    /**
     * Add config-defined routes into Router
     *
     * @param Yaf_Config_Abstract $config
     *
     * @return bool An ``Yaf_Config_Abstract`` instance, which should
     *              contains one or more valid route configs
     */
    public function addConfig($config)
    {
    }

    /**
     * Add new Route into Router
     *
     * @param string $name
     * @param Yaf_Route_Abstract $route
     *
     * @return bool 
     */
    public function addRoute($name, $route)
    {
    }

    /**
     * Get the effective route name
     *
     * @return string String, the name of the effective route.
     */
    public function getCurrentRoute()
    {
    }

    /**
     * Retrieve a route by name
     *
     * @param string $name
     *
     * @return Yaf_Route_Interface 
     */
    public function getRoute($name)
    {
    }

    /**
     * Retrieve registered routes
     *
     * @return mixed 
     */
    public function getRoutes()
    {
    }

    /**
     * The route purpose
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool 
     */
    public function route($request)
    {
    }
}