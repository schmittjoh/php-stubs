<?php

/** @phpstub */
class SphinxClient
{
    /**
     * Create a new SphinxClient object
     */
    public function __construct()
    {
    }

    /**
     * Add query to multi-query batch
     *
     * @param string $query
     * @param string $index
     * @param string $comment
     *
     * @return int Returns an index in an array of results that will be returned
     *             by  call or false on error.
     */
    public function addQuery($query, $index = '*', $comment = '')
    {
    }

    /**
     * Build text snippets
     *
     * @param array $docs
     * @param string $index
     * @param string $words
     * @param array $opts
     *
     * @return array Returns array of snippets on success.
     */
    public function buildExcerpts($docs, $index, $words, $opts = array())
    {
    }

    /**
     * Extract keywords from query
     *
     * @param string $query
     * @param string $index
     * @param bool $hits
     *
     * @return array Returns an array of associative arrays with per-keyword information.
     */
    public function buildKeywords($query, $index, $hits)
    {
    }

    /**
     * Closes previously opened persistent connection
     *
     * @return bool 
     */
    public function close()
    {
    }

    /**
     * Escape special characters
     *
     * @param string $string
     *
     * @return string Returns escaped string.
     */
    public function escapeString($string)
    {
    }

    /**
     * Get the last error message
     *
     * @return string Returns the last error message or an empty string if there were no errors.
     */
    public function getLastError()
    {
    }

    /**
     * Get the last warning
     *
     * @return string Returns the last warning message or an empty string if there were no warnings.
     */
    public function getLastWarning()
    {
    }

    /**
     * Opens persistent connection to the server
     *
     * @return bool 
     */
    public function open()
    {
    }

    /**
     * Execute search query
     *
     * @param string $query
     * @param string $index
     * @param string $comment
     *
     * @return array On success,  returns a list of
     *               found matches and additional per-query statistics. The result set is a
     *               hash utilize other structures instead of hash) with the following keys and
     *               values:
     */
    public function query($query, $index = '*', $comment = '')
    {
    }

    /**
     * Clear all filters
     *
     * @return void 
     */
    public function resetFilters()
    {
    }

    /**
     * Clear all group-by settings
     *
     * @return void 
     */
    public function resetGroupBy()
    {
    }

    /**
     * Run a batch of search queries
     *
     * @return array Returns false on failure and array of result sets on success.
     */
    public function runQueries()
    {
    }

    /**
     * Change the format of result set array
     *
     * @param bool $array_result
     *
     * @return bool Always returns true.
     */
    public function setArrayResult($array_result = false)
    {
    }

    /**
     * Set connection timeout
     *
     * @param float $timeout
     *
     * @return bool 
     */
    public function setConnectTimeout($timeout)
    {
    }

    /**
     * Set field weights
     *
     * @param array $weights
     *
     * @return bool 
     */
    public function setFieldWeights($weights)
    {
    }

    /**
     * Add new integer values set filter
     *
     * @param string $attribute
     * @param array $values
     * @param bool $exclude
     *
     * @return bool 
     */
    public function setFilter($attribute, $values, $exclude = false)
    {
    }

    /**
     * Add new float range filter
     *
     * @param string $attribute
     * @param float $min
     * @param float $max
     * @param bool $exclude
     *
     * @return bool 
     */
    public function setFilterFloatRange($attribute, $min, $max, $exclude = false)
    {
    }

    /**
     * Add new integer range filter
     *
     * @param string $attribute
     * @param int $min
     * @param int $max
     * @param bool $exclude
     *
     * @return bool 
     */
    public function setFilterRange($attribute, $min, $max, $exclude = false)
    {
    }

    /**
     * Set anchor point for a geosphere distance calculations
     *
     * @param string $attrlat
     * @param string $attrlong
     * @param float $latitude
     * @param float $longitude
     *
     * @return bool 
     */
    public function setGeoAnchor($attrlat, $attrlong, $latitude, $longitude)
    {
    }

    /**
     * Set grouping attribute
     *
     * @param string $attribute
     * @param int $func
     * @param string $groupsort
     *
     * @return bool 
     */
    public function setGroupBy($attribute, $func, $groupsort = '@group desc')
    {
    }

    /**
     * Set attribute name for per-group distinct values count calculations
     *
     * @param string $attribute
     *
     * @return bool 
     */
    public function setGroupDistinct($attribute)
    {
    }

    /**
     * Set a range of accepted document IDs
     *
     * @param int $min
     * @param int $max
     *
     * @return bool 
     */
    public function setIDRange($min, $max)
    {
    }

    /**
     * Set per-index weights
     *
     * @param array $weights
     *
     * @return bool 
     */
    public function setIndexWeights($weights)
    {
    }

    /**
     * Set offset and limit of the result set
     *
     * @param int $offset
     * @param int $limit
     * @param int $max_matches
     * @param int $cutoff
     *
     * @return bool 
     */
    public function setLimits($offset, $limit, $max_matches = false, $cutoff = false)
    {
    }

    /**
     * Set full-text query matching mode
     *
     * @param int $mode
     *
     * @return bool 
     */
    public function setMatchMode($mode)
    {
    }

    /**
     * Set maximum query time
     *
     * @param int $qtime
     *
     * @return bool 
     */
    public function setMaxQueryTime($qtime)
    {
    }

    /**
     * Sets temporary per-document attribute value
       overrides
     *
     * @param string $attribute
     * @param int $type
     * @param array $values
     *
     * @return bool 
     */
    public function setOverride($attribute, $type, $values)
    {
    }

    /**
     * Set ranking mode
     *
     * @param int $ranker
     *
     * @return bool 
     */
    public function setRankingMode($ranker)
    {
    }

    /**
     * Set retry count and delay
     *
     * @param int $count
     * @param int $delay
     *
     * @return bool 
     */
    public function setRetries($count, $delay = false)
    {
    }

    /**
     * Set select clause
     *
     * @param string $clause
     *
     * @return bool 
     */
    public function setSelect($clause)
    {
    }

    /**
     * Set searchd host and port
     *
     * @param string $server
     * @param int $port
     *
     * @return bool 
     */
    public function setServer($server, $port)
    {
    }

    /**
     * Set matches sorting mode
     *
     * @param int $mode
     * @param string $sortby
     *
     * @return bool 
     */
    public function setSortMode($mode, $sortby = NULL)
    {
    }

    /**
     * Queries searchd status
     *
     * @return array Returns an associative array of search server statistics.
     */
    public function status()
    {
    }

    /**
     * Update document attributes
     *
     * @param string $index
     * @param array $attributes
     * @param array $values
     * @param bool $mva
     *
     * @return int Returns number of actually updated documents (0 or more) on success, or
     *             false on failure.
     */
    public function updateAttributes($index, $attributes, $values, $mva = false)
    {
    }
}