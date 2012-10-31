<?php

/**
 * Sets the quality of service needed from the cluster
 *
 * @phpstub
 *
 * @param mixed $connection
 * @param int $service_level
 * @param int $service_level_option
 * @param mixed $option_value
 *
 * @return bool Returns true if the connections service level
 *              has been switched to the requested. Otherwise, returns false
 */
function mysqlnd_ms_set_qos($connection, $service_level, $service_level_option = NULL, $option_value = NULL)
{
}