<?php

/** @phpstub */
class Weakref
{
    /**
     * Constructs a new weak reference
     */
    public function __construct()
    {
    }

    /**
     * Acquires a strong reference on that object
     *
     * @return bool Returns true if the reference was valid and could be turned into a strong
     *              reference, false otherwise.
     */
    public function acquire()
    {
    }

    /**
     * Returns the object pointed to by the weak reference
     *
     * @return object Returns the object if the reference is still valid, null otherwise.
     */
    public function get()
    {
    }

    /**
     * Releases a previously acquired reference
     *
     * @return bool Returns true if the reference was previously acquired and thus could be
     *              released, false otherwise.
     */
    public function release()
    {
    }

    /**
     * Checks whether the object referenced still exists
     *
     * @return bool Returns true if the object still exists and is thus still accessible via
     *              , false otherwise.
     */
    public function valid()
    {
    }
}