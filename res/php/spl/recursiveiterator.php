<?php

/** @phpstub */
interface RecursiveIterator extends \Iterator
{
    /**
     * Returns an iterator for the current entry.
     *
     * @return RecursiveIterator An iterator for the current entry.
     */
    public function getChildren();

    /**
     * Returns if an iterator can be created fot the current entry.
     *
     * @return bool Returns true if the current entry can be iterated over, otherwise returns false.
     */
    public function hasChildren();
}