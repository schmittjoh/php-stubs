<?php

/** @phpstub */
class Yaf_Route_Regex extends \Yaf_Route_Interface implements \Yaf_Route_Interface
{
    protected $_verify;
    protected $_route;
    protected $_maps;
    protected $_default;

    /**
     * The __construct purpose
     *
     * @param string $match
     * @param array $route
     * @param array $map
     * @param array $verify
     */
    public function __construct($match, $route, $map = array(), $verify = array())
    {
    }

    /**
     * The route purpose
     *
     * @param Yaf_Request_Abstract $request
     *
     * @return bool If the pattern given by the first parameter of
     *              matche the request
     *              uri, return TRUE, otherwise return FALSE.
     */
    public function route($request)
    {
    }
}