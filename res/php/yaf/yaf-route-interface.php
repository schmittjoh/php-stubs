<?php

/** @phpstub */
interface Yaf_Route_Interface
{
    /**
     * route a request
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool 
     */
    public function route($request);
}