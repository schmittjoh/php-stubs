<?php

/**
 * Gets children of remote document
 *
 * @phpstub
 *
 * @param int $connection
 * @param string $object_record
 *
 * @return mixed If the number of children is 1 the function will return the document
 *               itself formatted by the Hyperwave Gateway Interface (HGI). If the number
 *               of children is greater than 1 it will return an array of object record
 *               with each maybe the input value for another call to
 *               . Those object records are
 *               virtual and do not exist in the Hyperwave server, therefore they do not
 *               have a valid object ID. How exactly such an object record looks like is up
 *               to the HGI.
 */
function hw_getremotechildren($connection, $object_record)
{
}