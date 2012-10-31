<?php

/** @phpstub */
class Yaf_Plugin_Abstract
{
    /**
     * The dispatchLoopShutdown purpose
     *
     * @param Yaf_Request_Abstract $request
     * @param Yaf_Response_Abstract $response
     *
     * @return void 
     */
    public function dispatchLoopShutdown($request, $response)
    {
    }

    /**
     * The dispatchLoopStartup purpose
     *
     * @param Yaf_Request_Abstract $request
     * @param Yaf_Response_Abstract $response
     *
     * @return void 
     */
    public function dispatchLoopStartup($request, $response)
    {
    }

    /**
     * The postDispatch purpose
     *
     * @param Yaf_Request_Abstract $request
     * @param Yaf_Response_Abstract $response
     *
     * @return void 
     */
    public function postDispatch($request, $response)
    {
    }

    /**
     * The preDispatch purpose
     *
     * @param Yaf_Request_Abstract $request
     * @param Yaf_Response_Abstract $response
     *
     * @return void 
     */
    public function preDispatch($request, $response)
    {
    }

    /**
     * The preResponse purpose
     *
     * @param Yaf_Request_Abstract $request
     * @param Yaf_Response_Abstract $response
     *
     * @return void 
     */
    public function preResponse($request, $response)
    {
    }

    /**
     * The routerShutdown purpose
     *
     * @param Yaf_Request_Abstract $request
     * @param Yaf_Response_Abstract $response
     *
     * @return void 
     */
    public function routerShutdown($request, $response)
    {
    }

    /**
     * RouterStartup hook
     *
     * @param Yaf_Request_Abstract $request
     * @param Yaf_Response_Abstract $response
     *
     * @return void 
     */
    public function routerStartup($request, $response)
    {
    }
}