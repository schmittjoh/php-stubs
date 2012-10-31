<?php

/**
 * Sets the callback functions for a user-defined procedural storage handler
 *
 * @phpstub
 *
 * @param string $get_hash
 * @param string $find_query_in_cache
 * @param string $return_to_cache
 * @param string $add_query_to_cache_if_not_exists
 * @param string $query_is_select
 * @param string $update_query_run_time_stats
 * @param string $get_stats
 * @param string $clear_cache
 *
 * @return bool Returns TRUE on success or FALSE on FAILURE.
 */
function mysqlnd_qc_set_user_handlers($get_hash, $find_query_in_cache, $return_to_cache, $add_query_to_cache_if_not_exists, $query_is_select, $update_query_run_time_stats, $get_stats, $clear_cache)
{
}