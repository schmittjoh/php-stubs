<?php

/** @phpstub */
class php_user_filter
{
    public $params;
    public $filtername;

    /**
     * Called when applying the filter
     *
     * @param resource $in
     * @param resource $out
     * @param int $consumed
     * @param bool $closing
     *
     * @return int The  method must return one of
     *             three values upon completion.
     */
    public function filter($in, $out, $consumed, $closing)
    {
    }

    /**
     * Called when closing the filter
     *
     * @return void Return value is ignored.
     */
    public function onClose()
    {
    }

    /**
     * Called when creating the filter
     *
     * @return bool Your implementation of
     *              this method should return false on failure, or true on success.
     */
    public function onCreate()
    {
    }
}