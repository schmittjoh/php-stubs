<?php

/** @phpstub */
class HttpRequestPool implements \Iterator, \Countable
{
    /**
     * HttpRequestPool constructor
     *
     * @phpstub-variable-parameters
     *
     * @param HttpRequest $request
     * @param HttpRequest $_
     */
    public function __construct($request = NULL, $_ = NULL)
    {
    }

    /**
     * HttpRequestPool destructor
     *
     * @return void
     */
    public function __destruct()
    {
    }

    /**
     * Attach HttpRequest
     *
     * @param HttpRequest $request
     *
     * @return bool 
     */
    public function attach($request)
    {
    }

    /**
     * Detach HttpRequest
     *
     * @param HttpRequest $request
     *
     * @return bool 
     */
    public function detach($request)
    {
    }

    /**
     * Get attached requests
     *
     * @return array Returns an array containing all currently attached ``HttpRequest`` objects.
     */
    public function getAttachedRequests()
    {
    }

    /**
     * Get finished requests
     *
     * @return array Returns an array containing all attached ``HttpRequest`` objects that already have finished their work.
     */
    public function getFinishedRequests()
    {
    }

    /**
     * Reset request pool
     *
     * @return void
     */
    public function reset()
    {
    }

    /**
     * Send all requests
     *
     * @return bool 
     */
    public function send()
    {
    }

    /**
     * Perform socket actions
     *
     * @return bool Returns true until each request has finished its transaction.
     */
    public function socketPerform()
    {
    }

    /**
     * Perform socket select
     *
     * @param float $timeout
     *
     * @return bool 
     */
    public function socketSelect($timeout = false)
    {
    }
}