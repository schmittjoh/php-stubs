<?php

/** @phpstub */
class Yaf_Route_Map implements \Yaf_Route_Interface
{
    protected $_delimeter;
    protected $_ctl_router;

    /**
     * The __construct purpose
     *
     * @param string $controller_prefer
     * @param string $delimiter
     */
    public function __construct($controller_prefer = 'false', $delimiter = '\'\'')
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