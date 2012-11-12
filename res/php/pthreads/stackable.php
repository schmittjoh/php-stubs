<?php

/** @phpstub */
class Stackable
{
    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isRunning()
    {
    }

    /**
     * State Detection
     *
     * @return boolean A boolean indication of state
     */
    public function isWaiting()
    {
    }

    /**
     * Synchronization
     *
     * @return boolean A boolean indication of state
     */
    public function notify()
    {
    }

    /**
     * Execution
     *
     * @return void The methods return value, if used, will be ignored
     */
    public function run()
    {
    }

    /**
     * Synchronization
     *
     * @param string $timeout
     *
     * @return boolean A boolean indication of success
     */
    public function wait($timeout = NULL)
    {
    }
}