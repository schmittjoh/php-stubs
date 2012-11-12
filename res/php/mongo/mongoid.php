<?php

/** @phpstub */
class MongoId
{
    /** @var string */
    public $id;

    /**
     * Creates a new id
     *
     * @param string $id
     */
    public function __construct($id = NULL)
    {
    }

    /**
     * Create a dummy MongoId
     *
     * @param array $props
     *
     * @return MongoId A new id with the value "000000000000000000000000".
     */
    public function __set_state($props)
    {
    }

    /**
     * Returns a hexidecimal representation of this id
     *
     * @return string This id.
     */
    public function __toString()
    {
    }

    /**
     * Gets the hostname being used for this machine's ids
     *
     * @return string Returns the hostname.
     */
    public function getHostname()
    {
    }

    /**
     * Gets the incremented value to create this id
     *
     * @return int Returns the incremented value used to create this ``MongoId``.
     */
    public function getInc()
    {
    }

    /**
     * Gets the process ID
     *
     * @return int Returns the PID of the ``MongoId``.
     */
    public function getPID()
    {
    }

    /**
     * Gets the number of seconds since the epoch that this id was created
     *
     * @return int Returns the number of seconds since the epoch that this id was created.  There are only
     *             four bytes of timestamp stored, so ``MongoDate`` is a better choice
     *             for storing exact or wide-ranging times.
     */
    public function getTimestamp()
    {
    }
}