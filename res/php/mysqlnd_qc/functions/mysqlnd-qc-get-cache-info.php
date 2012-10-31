<?php

/**
 * Returns information on the current handler, the number of cache entries and cache entries, if available
 *
 * @phpstub
 *
 * @return array Returns information on the current handler, the number of cache entries and
 *               cache entries, if available. If and what data will be returned for the cache
 *               entries is subject to the active storage handler.
 *               Storage handler are free to return any data. Storage handler are
 *               recommended to return at least the data provided by the default handler,
 *               if technically possible.
 */
function mysqlnd_qc_get_cache_info()
{
}