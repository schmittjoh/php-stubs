<?php

/** @phpstub */
class Yaf_Route_Simple implements \Yaf_Route_Interface
{
    protected $module;
    protected $controller;
    protected $action;

    /**
     * Yaf_Route_Simple constructor
     *
     * @param string $module_name
     * @param string $controller_name
     * @param string $action_name
     */
    public function __construct($module_name, $controller_name, $action_name)
    {
    }

    /**
     * Route a request
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool always be true
     */
    public function route($request)
    {
    }
}