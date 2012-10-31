<?php

/**
 * Evaluate a string as PHP code
 *
 * @phpstub
 *
 * @param string $code
 *
 * @return mixed returns null unless
 *               is called in the evaluated code, in which case
 *               the value passed to  is returned. If there is a
 *               parse error in the evaluated code,  returns
 *               false and execution of the following code continues normally. It is
 *               not possible to catch a parse error in
 *               using .
 */
function eval($code)
{
}