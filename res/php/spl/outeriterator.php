<?php

/** @phpstub */
interface OuterIterator extends \Iterator
{
    /**
     * Returns the inner iterator for the current entry.
     *
     * @return Iterator The inner iterator for the current entry.
     */
    public function getInnerIterator();
}