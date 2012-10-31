<?php

/** @phpstub */
class Yaf_Action_Abstract extends \Yaf_Controller_Abstract
{
    protected $_controller;

    /**
     * Execute the action
     *
     * @phpstub-variable-parameters
     *
     * @param mixed $arg
     * @param mixed $_
     *
     * @return mixed 
     */
    public function execute($arg = NULL, $_ = NULL)
    {
    }

    /**
     * get controller instance
     *
     * @return Yaf_Controller_Abstract 
     */
    public function getController()
    {
    }
}