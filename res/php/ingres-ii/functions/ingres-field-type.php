<?php

/**
 * Get the type of a field in a query result
 *
 * @phpstub
 *
 * @param resource $result
 * @param int $index
 *
 * @return string returns the type of a
 *                field in a query result.  Examples of
 *                types returned are ,
 *                , ,
 *                , ,
 *                . Some of these types can map to more
 *                than one SQL type depending on the length of the field (see
 *                ). For example
 *                IIAPI_FLT_TYPE can be a float4 or a float8. For detailed
 *                information, see the Ingres , Appendix
 *                "Data Types" in the Ingres documentation.
 */
function ingres_field_type($result, $index)
{
}