<?php

/** @phpstub */
class Cond
{
    /**
     * Broadcast a condition to all Threads
     *
     * @param long $condition
     *
     * @return boolean A boolean indication of success.
     */
    public function broadcast($condition)
    {
    }

    /**
     * Create a new Condition Variable
     *
     * @return long A handle to a Condition Variable
     */
    public function create()
    {
    }

    /**
     * Destroy a handle to a Condition Variable and free the associated resources
     *
     * @param long $condition
     *
     * @return boolean A boolean indication of success.
     */
    public function destroy($condition)
    {
    }

    /**
     * Signal a condition to a single Thread
     *
     * @param long $condition
     *
     * @return boolean A boolean indication of success.
     */
    public function signal($condition)
    {
    }

    /**
     * Wait for a signal on a Condition Variable
     *
     * @param long $condition
     * @param long $mutex
     * @param long $timeout
     *
     * @return boolean A boolean indication of success.
     */
    public function wait($condition, $mutex, $timeout = NULL)
    {
    }
}