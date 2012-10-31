<?php

/** @phpstub */
class MongoPool
{
    /**
     * Get pool size for connection pools
     *
     * @return int Returns the current pool size.
     */
    public function getSize()
    {
    }

    /**
     * Returns information about all connection pools.
     *
     * @return array Each connection pool has an identifier, which starts with the host. For each
     *               pool, this function shows the following fields:
     */
    public function info()
    {
    }

    /**
     * Set the size for future connection pools.
     *
     * @param int $size
     *
     * @return bool Returns the former value of pool size.
     */
    public function setSize($size)
    {
    }
}