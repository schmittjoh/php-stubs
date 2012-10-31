<?php

/** @phpstub */
class Yaf_Request_Abstract
{
    const SCHEME_HTTP = 'http';
    const SCHEME_HTTPS = 'https';

    public $module;
    public $method;
    public $controller;
    public $action;
    protected $uri;
    protected $routed;
    protected $params;
    protected $language;
    protected $dispatched;
    protected $_exception;
    protected $_base_uri;

    /**
     * The getActionName purpose
     *
     * @return void 
     */
    public function getActionName()
    {
    }

    /**
     * The getBaseUri purpose
     *
     * @return void 
     */
    public function getBaseUri()
    {
    }

    /**
     * The getControllerName purpose
     *
     * @return void 
     */
    public function getControllerName()
    {
    }

    /**
     * Retrieve ENV varialbe
     *
     * @param string $name
     * @param string $default
     *
     * @return void 
     */
    public function getEnv($name, $default = NULL)
    {
    }

    /**
     * The getException purpose
     *
     * @return void 
     */
    public function getException()
    {
    }

    /**
     * The getLanguage purpose
     *
     * @return void 
     */
    public function getLanguage()
    {
    }

    /**
     * The getMethod purpose
     *
     * @return void 
     */
    public function getMethod()
    {
    }

    /**
     * The getModuleName purpose
     *
     * @return void 
     */
    public function getModuleName()
    {
    }

    /**
     * The getParam purpose
     *
     * @param string $name
     * @param string $default
     *
     * @return void 
     */
    public function getParam($name, $default = NULL)
    {
    }

    /**
     * The getParams purpose
     *
     * @return void 
     */
    public function getParams()
    {
    }

    /**
     * The getRequestUri purpose
     *
     * @return void 
     */
    public function getRequestUri()
    {
    }

    /**
     * Retrieve SERVER variable
     *
     * @param string $name
     * @param string $default
     *
     * @return void 
     */
    public function getServer($name, $default = NULL)
    {
    }

    /**
     * The isCli purpose
     *
     * @return void 
     */
    public function isCli()
    {
    }

    /**
     * The isDispatched purpose
     *
     * @return void 
     */
    public function isDispatched()
    {
    }

    /**
     * The isGet purpose
     *
     * @return void 
     */
    public function isGet()
    {
    }

    /**
     * The isHead purpose
     *
     * @return void 
     */
    public function isHead()
    {
    }

    /**
     * The isOptions purpose
     *
     * @return void 
     */
    public function isOptions()
    {
    }

    /**
     * The isPost purpose
     *
     * @return void 
     */
    public function isPost()
    {
    }

    /**
     * The isPut purpose
     *
     * @return void 
     */
    public function isPut()
    {
    }

    /**
     * The isRouted purpose
     *
     * @return void 
     */
    public function isRouted()
    {
    }

    /**
     * The isXmlHttpRequest purpose
     *
     * @return void 
     */
    public function isXmlHttpRequest()
    {
    }

    /**
     * The setActionName purpose
     *
     * @param string $action
     *
     * @return void 
     */
    public function setActionName($action)
    {
    }

    /**
     * The setBaseUri purpose
     *
     * @param string $uir
     *
     * @return void 
     */
    public function setBaseUri($uir)
    {
    }

    /**
     * The setControllerName purpose
     *
     * @param string $controller
     *
     * @return void 
     */
    public function setControllerName($controller)
    {
    }

    /**
     * The setDispatched purpose
     *
     * @return void 
     */
    public function setDispatched()
    {
    }

    /**
     * The setModuleName purpose
     *
     * @param string $module
     *
     * @return void 
     */
    public function setModuleName($module)
    {
    }

    /**
     * The setParam purpose
     *
     * @param string $name
     * @param string $value
     *
     * @return void 
     */
    public function setParam($name, $value = NULL)
    {
    }

    /**
     * The setRequestUri purpose
     *
     * @param string $uir
     *
     * @return void 
     */
    public function setRequestUri($uir)
    {
    }

    /**
     * The setRouted purpose
     *
     * @param string $flag
     *
     * @return void 
     */
    public function setRouted($flag = NULL)
    {
    }
}