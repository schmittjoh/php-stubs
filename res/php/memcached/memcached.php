<?php

/** @phpstub */
class Memcached
{
    const DISTRIBUTION_CONSISTENT = NULL;
    const DISTRIBUTION_MODULA = NULL;
    const GET_PRESERVE_ORDER = NULL;
    const HASH_CRC = NULL;
    const HASH_DEFAULT = NULL;
    const HASH_FNV1_32 = NULL;
    const HASH_FNV1_64 = NULL;
    const HASH_FNV1A_32 = NULL;
    const HASH_FNV1A_64 = NULL;
    const HASH_HSIEH = NULL;
    const HASH_MD5 = NULL;
    const HASH_MURMUR = NULL;
    const HAVE_IGBINARY = NULL;
    const HAVE_JSON = NULL;
    const OPT_BINARY_PROTOCOL = NULL;
    const OPT_BUFFER_WRITES = NULL;
    const OPT_CACHE_LOOKUPS = NULL;
    const OPT_COMPRESSION = NULL;
    const OPT_CONNECT_TIMEOUT = NULL;
    const OPT_DISTRIBUTION = NULL;
    const OPT_HASH = NULL;
    const OPT_LIBKETAMA_COMPATIBLE = NULL;
    const OPT_NO_BLOCK = NULL;
    const OPT_POLL_TIMEOUT = NULL;
    const OPT_PREFIX_KEY = NULL;
    const OPT_RECV_TIMEOUT = NULL;
    const OPT_RETRY_TIMEOUT = NULL;
    const OPT_SEND_TIMEOUT = NULL;
    const OPT_SERIALIZER = NULL;
    const OPT_SERVER_FAILURE_LIMIT = NULL;
    const OPT_SOCKET_RECV_SIZE = NULL;
    const OPT_SOCKET_SEND_SIZE = NULL;
    const OPT_TCP_NODELAY = NULL;
    const RES_BAD_KEY_PROVIDED = NULL;
    const RES_BUFFERED = NULL;
    const RES_CLIENT_ERROR = NULL;
    const RES_CONNECTION_SOCKET_CREATE_FAILURE = NULL;
    const RES_DATA_EXISTS = NULL;
    const RES_END = NULL;
    const RES_ERRNO = NULL;
    const RES_FAILURE = NULL;
    const RES_HOST_LOOKUP_FAILURE = NULL;
    const RES_NO_SERVERS = NULL;
    const RES_NOTFOUND = NULL;
    const RES_NOTSTORED = NULL;
    const RES_PARTIAL_READ = NULL;
    const RES_PAYLOAD_FAILURE = NULL;
    const RES_PROTOCOL_ERROR = NULL;
    const RES_SERVER_ERROR = NULL;
    const RES_SOME_ERRORS = NULL;
    const RES_SUCCESS = NULL;
    const RES_TIMEOUT = NULL;
    const RES_UNKNOWN_READ_FAILURE = NULL;
    const RES_WRITE_FAILURE = NULL;
    const SERIALIZER_IGBINARY = NULL;
    const SERIALIZER_JSON = NULL;
    const SERIALIZER_PHP = NULL;

    /**
     * Create a Memcached instance
     */
    public function __construct()
    {
    }

    /**
     * Add an item under a new key
     *
     * @param string $key
     * @param mixed $value
     * @param int $expiration
     *
     * @return bool The  will return
     *              if the key already exists.
     */
    public function add($key, $value, $expiration = NULL)
    {
    }

    /**
     * Add an item under a new key on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param mixed $value
     * @param int $expiration
     *
     * @return bool The  will return
     *              if the key already exists.
     */
    public function addByKey($server_key, $key, $value, $expiration = NULL)
    {
    }

    /**
     * Add a server to the server pool
     *
     * @param string $host
     * @param int $port
     * @param int $weight
     *
     * @return bool 
     */
    public function addServer($host, $port, $weight = 0)
    {
    }

    /**
     * Add multiple servers to the server pool
     *
     * @param array $servers
     *
     * @return bool 
     */
    public function addServers($servers)
    {
    }

    /**
     * Append data to an existing item
     *
     * @param string $key
     * @param string $value
     *
     * @return bool The  will return
     *              if the key does not exist.
     */
    public function append($key, $value)
    {
    }

    /**
     * Append data to an existing item on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param string $value
     *
     * @return bool The  will return
     *              if the key does not exist.
     */
    public function appendByKey($server_key, $key, $value)
    {
    }

    /**
     * Compare and swap an item
     *
     * @param float $cas_token
     * @param string $key
     * @param mixed $value
     * @param int $expiration
     *
     * @return bool The  will return
     *              if the item you are trying
     *              to store has been modified since you last fetched it.
     */
    public function cas($cas_token, $key, $value, $expiration = NULL)
    {
    }

    /**
     * Compare and swap an item on a specific server
     *
     * @param float $cas_token
     * @param string $server_key
     * @param string $key
     * @param mixed $value
     * @param int $expiration
     *
     * @return bool The  will return
     *              if the item you are trying
     *              to store has been modified since you last fetched it.
     */
    public function casByKey($cas_token, $server_key, $key, $value, $expiration = NULL)
    {
    }

    /**
     * Decrement numeric item's value
     *
     * @param string $key
     * @param int $offset
     *
     * @return int Returns item's new value on success.
     *             The  will return
     *             if the key does not exist.
     */
    public function decrement($key, $offset = 1)
    {
    }

    /**
     * Delete an item
     *
     * @param string $key
     * @param int $time
     *
     * @return bool The  will return
     *              if the key does not exist.
     */
    public function delete($key, $time = 0)
    {
    }

    /**
     * Delete an item from a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param int $time
     *
     * @return bool The  will return
     *              if the key does not exist.
     */
    public function deleteByKey($server_key, $key, $time = 0)
    {
    }

    /**
     * Fetch the next result
     *
     * @return array Returns the next result or false otherwise.
     *               The  will return
     *               if result set is exhausted.
     */
    public function fetch()
    {
    }

    /**
     * Fetch all the remaining results
     *
     * @return array Returns the results.
     */
    public function fetchAll()
    {
    }

    /**
     * Invalidate all items in the cache
     *
     * @param int $delay
     *
     * @return bool 
     */
    public function flush($delay = 0)
    {
    }

    /**
     * Retrieve an item
     *
     * @param string $key
     * @param callable $cache_cb
     * @param float $cas_token
     *
     * @return mixed Returns the value stored in the cache or false otherwise.
     *               The  will return
     *               if the key does not exist.
     */
    public function get($key, $cache_cb = NULL, $cas_token = NULL)
    {
    }

    /**
     * Retrieve an item from a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param callable $cache_cb
     * @param float $cas_token
     *
     * @return mixed Returns the value stored in the cache or false otherwise.
     *               The  will return
     *               if the key does not exist.
     */
    public function getByKey($server_key, $key, $cache_cb = NULL, $cas_token = NULL)
    {
    }

    /**
     * Request multiple items
     *
     * @param array $keys
     * @param bool $with_cas
     * @param callable $value_cb
     *
     * @return bool 
     */
    public function getDelayed($keys, $with_cas = NULL, $value_cb = NULL)
    {
    }

    /**
     * Request multiple items from a specific server
     *
     * @param string $server_key
     * @param array $keys
     * @param bool $with_cas
     * @param callable $value_cb
     *
     * @return bool 
     */
    public function getDelayedByKey($server_key, $keys, $with_cas = NULL, $value_cb = NULL)
    {
    }

    /**
     * Retrieve multiple items
     *
     * @param array $keys
     * @param array $cas_tokens
     * @param int $flags
     *
     * @return mixed Returns the array of found items.
     */
    public function getMulti($keys, $cas_tokens = array(), $flags = NULL)
    {
    }

    /**
     * Retrieve multiple items from a specific server
     *
     * @param string $server_key
     * @param array $keys
     * @param string $cas_tokens
     * @param int $flags
     *
     * @return array Returns the array of found items.
     */
    public function getMultiByKey($server_key, $keys, $cas_tokens = NULL, $flags = NULL)
    {
    }

    /**
     * Retrieve a Memcached option value
     *
     * @param int $option
     *
     * @return mixed Returns the value of the requested option, or false on
     *               error.
     */
    public function getOption($option)
    {
    }

    /**
     * Return the result code of the last operation
     *
     * @return int Result code of the last Memcached operation.
     */
    public function getResultCode()
    {
    }

    /**
     * Return the message describing the result of the last operation
     *
     * @return string Message describing the result of the last Memcached operation.
     */
    public function getResultMessage()
    {
    }

    /**
     * Map a key to a server
     *
     * @param string $server_key
     *
     * @return array 
     */
    public function getServerByKey($server_key)
    {
    }

    /**
     * Get the list of the servers in the pool
     *
     * @return array The list of all servers in the server pool.
     */
    public function getServerList()
    {
    }

    /**
     * Get server pool statistics
     *
     * @return array Array of server statistics, one entry per server.
     */
    public function getStats()
    {
    }

    /**
     * Get server pool version info
     *
     * @return array Array of server versions, one entry per server.
     */
    public function getVersion()
    {
    }

    /**
     * Increment numeric item's value
     *
     * @param string $key
     * @param int $offset
     *
     * @return int Returns new item's value on success.
     *             The  will return
     *             if the key does not exist.
     */
    public function increment($key, $offset = 1)
    {
    }

    /**
     * Prepend data to an existing item
     *
     * @param string $key
     * @param string $value
     *
     * @return bool The  will return
     *              if the key does not exist.
     */
    public function prepend($key, $value)
    {
    }

    /**
     * Prepend data to an existing item on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param string $value
     *
     * @return bool The  will return
     *              if the key does not exist.
     */
    public function prependByKey($server_key, $key, $value)
    {
    }

    /**
     * Replace the item under an existing key
     *
     * @param string $key
     * @param mixed $value
     * @param int $expiration
     *
     * @return bool The  will return
     *              if the key does not exist.
     */
    public function replace($key, $value, $expiration = NULL)
    {
    }

    /**
     * Replace the item under an existing key on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param mixed $value
     * @param int $expiration
     *
     * @return bool The  will return
     *              if the key does not exist.
     */
    public function replaceByKey($server_key, $key, $value, $expiration = NULL)
    {
    }

    /**
     * Store an item
     *
     * @param string $key
     * @param mixed $value
     * @param int $expiration
     *
     * @return bool 
     */
    public function set($key, $value, $expiration = NULL)
    {
    }

    /**
     * Store an item on a specific server
     *
     * @param string $server_key
     * @param string $key
     * @param mixed $value
     * @param int $expiration
     *
     * @return bool 
     */
    public function setByKey($server_key, $key, $value, $expiration = NULL)
    {
    }

    /**
     * Store multiple items
     *
     * @param array $items
     * @param int $expiration
     *
     * @return bool 
     */
    public function setMulti($items, $expiration = NULL)
    {
    }

    /**
     * Store multiple items on a specific server
     *
     * @param string $server_key
     * @param array $items
     * @param int $expiration
     *
     * @return bool 
     */
    public function setMultiByKey($server_key, $items, $expiration = NULL)
    {
    }

    /**
     * Set a Memcached option
     *
     * @param int $option
     * @param mixed $value
     *
     * @return bool 
     */
    public function setOption($option, $value)
    {
    }
}