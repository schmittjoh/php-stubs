<?php

/** @phpstub */
class MongoLog
{
    const ALL = 31;
    const FINE = 4;
    const INFO = 2;
    const IO = 4;
    const NONE = 0;
    const PARSE = 16;
    const POOL = 2;
    const RS = 1;
    const SERVER = 8;
    const WARNING = 1;

    /** @var int */
    public $module;

    /** @var int */
    public $level;

    /**
     * Retrieve the previously set callback function name
     *
     * @return void Returns the callback function name, or false if not set yet.
     */
    public function getCallback()
    {
    }

    /**
     * Gets the log level
     *
     * @return int Returns the current level.
     */
    public function getLevel()
    {
    }

    /**
     * Gets the modules currently being logged
     *
     * @return int Returns the modules currently being logged.
     */
    public function getModule()
    {
    }

    /**
     * Set a callback function to be called on events
     *
     * @param callable $log_function
     *
     * @return void 
     */
    public function setCallback($log_function)
    {
    }

    /**
     * Sets logging level
     *
     * @param int $level
     *
     * @return void
     */
    public function setLevel($level)
    {
    }

    /**
     * Sets driver functionality to log
     *
     * @param int $module
     *
     * @return void
     */
    public function setModule($module)
    {
    }
}