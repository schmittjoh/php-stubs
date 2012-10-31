<?php

/** @phpstub */
interface SeekableIterator extends \Iterator
{
    /**
     * Seeks to a position
     *
     * @param int $position
     *
     * @return void 
     */
    public function seek($position);
}