<?php

/** @phpstub */
class RecursiveArrayIterator extends \ArrayIterator implements \RecursiveIterator
{
    /**
     * Returns an iterator for the current entry if it is an ``array`` or an ``object``.
     *
     * @return RecursiveArrayIterator An iterator for the current entry, if it is an ``array`` or ``object``.
     */
    public function getChildren()
    {
    }

    /**
     * Returns whether current entry is an array or an object.
     *
     * @return bool Returns true if the current entry is an ``array`` or an ``object``,
     *              otherwise false is returned.
     */
    public function hasChildren()
    {
    }
}