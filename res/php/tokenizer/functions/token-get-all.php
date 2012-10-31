<?php

/**
 * Split given source into PHP tokens
 *
 * @phpstub
 *
 * @param string $source
 *
 * @return array An array of token identifiers. Each individual token identifier is either
 *               a single character (i.e.: , ,
 *               , , etc...),
 *               or a three element array containing the token index in element 0, the string
 *               content of the original token in element 1 and the line number in element 2.
 */
function token_get_all($source)
{
}