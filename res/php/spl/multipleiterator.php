<?php

/** @phpstub */
class MultipleIterator implements \Iterator, \Traversable
{
    const MIT_KEYS_ASSOC = 2;
    const MIT_KEYS_NUMERIC = 0;
    const MIT_NEED_ALL = 1;
    const MIT_NEED_ANY = 0;

    /**
     * Constructs a new MultipleIterator
     */
    public function __construct()
    {
    }

    /**
     * Attaches iterator information
     *
     * @param Iterator $iterator
     * @param string $infos
     *
     * @return void Description...
     */
    public function attachIterator($iterator, $infos = NULL)
    {
    }

    /**
     * Checks if an iterator is attached
     *
     * @param Iterator $iterator
     *
     * @return void 
     */
    public function containsIterator($iterator)
    {
    }

    /**
     * Gets the number of attached iterator instances
     *
     * @return void The number of attached iterator instances (as an ``integer``).
     */
    public function countIterators()
    {
    }

    /**
     * Gets the registered iterator instances
     *
     * @return array An ``array`` of all registered iterator instances,
     *               or false if no sub iterator is attached.
     */
    public function current()
    {
    }

    /**
     * Detaches an iterator
     *
     * @param Iterator $iterator
     *
     * @return void 
     */
    public function detachIterator($iterator)
    {
    }

    /**
     * Gets the flag information
     *
     * @return void Information about the flags, as an ``integer``.
     */
    public function getFlags()
    {
    }

    /**
     * Gets the registered iterator instances
     *
     * @return void An ``array`` of all registered iterator instances,
     *              or false if no sub iterator is attached.
     */
    public function key()
    {
    }

    /**
     * Moves all attached iterator instances forward
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Rewinds all attached iterator instances
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Sets flags
     *
     * @param int $flags
     *
     * @return void 
     */
    public function setFlags($flags)
    {
    }

    /**
     * Checks the validity of sub iterators
     *
     * @return void Returns true if one or all sub iterators are valid depending on flags,
     *              otherwise false
     */
    public function valid()
    {
    }
}