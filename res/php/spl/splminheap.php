<?php

/** @phpstub */
class SplMinHeap extends \SplHeap implements \Iterator, \Countable
{
    /**
     * Compare elements in order to place them correctly in the heap while sifting up.
     *
     * @param mixed $value1
     * @param mixed $value2
     *
     * @return int Result of the comparison, positive integer if  is lower than , 0 if they are equal, negative integer otherwise.
     */
    public function compare($value1, $value2)
    {
    }
}