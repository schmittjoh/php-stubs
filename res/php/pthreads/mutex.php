<?php

/** @phpstub */
class Mutex
{
    /**
     * Create a new Mutex
     *
     * @param boolean $lock
     *
     * @return long A newly created and optionally locked Mutex handle
     */
    public function create($lock = NULL)
    {
    }

    /**
     * To destroy a handle to a Mutex and free the associated resources
     *
     * @param long $mutex
     *
     * @return boolean A boolean indication of success
     */
    public function destroy($mutex)
    {
    }

    /**
     * The lock purpose
     *
     * @param long $mutex
     *
     * @return boolean A boolean indication of success.
     */
    public function lock($mutex)
    {
    }

    /**
     * To attempt to lock a Mutex without blocking.
     *
     * @param long $mutex
     *
     * @return boolean A boolean indication of success.
     */
    public function trylock($mutex)
    {
    }

    /**
     * Attempts to unlock a Mutex
     *
     * @param long $mutex
     * @param boolean $destroy
     *
     * @return boolean A boolean indication of success.
     */
    public function unlock($mutex, $destroy = NULL)
    {
    }
}