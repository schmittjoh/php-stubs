<?php

/** @phpstub */
class Yaf_Route_Supervar implements \Yaf_Route_Interface
{
    protected $_var_name;

    /**
     * The __construct purpose
     *
     * @param string $supervar_name
     */
    public function __construct($supervar_name)
    {
    }

    /**
     * The route purpose
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool If there is a key(which was defined in
     *              ) in $_GET, return true.
     *              otherwise return false.
     */
    public function route($request)
    {
    }
}