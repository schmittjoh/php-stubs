<?php

/**
 * Convert attributes from object record to object array
 *
 * @phpstub
 *
 * @param string $object_record
 * @param array $format
 *
 * @return array Returns an array. The keys of the resulting array are the attributes names.
 *               Multi-value attributes like 'Title' in different languages form its own
 *               array. The keys of this array are the left part to the colon of the
 *               attribute value. This left part must be two characters long.
 */
function hw_objrec2array($object_record, $format = array())
{
}