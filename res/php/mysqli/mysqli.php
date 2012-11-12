<?php

/** @phpstub */
class mysqli
{
    /**
     * Gets the number of affected rows in a previous MySQL operation
     *
     * @param mysqli $link
     *
     * @return int An integer greater than zero indicates the number of rows affected or
     *             retrieved.
     *             Zero indicates that no records where updated for an UPDATE statement, no
     *             rows matched the  clause in the query or that no
     *             query has yet been executed. -1 indicates that the query returned an
     *             error.
     */
    public function $affected_rows($link)
    {
    }

    /**
     * Get MySQL client info
     *
     * @param mysqli $link
     *
     * @return string A string that represents the MySQL client library version
     */
    public function $client_info($link)
    {
    }

    /**
     * Returns the MySQL client version as a string
     *
     * @param mysqli $link
     *
     * @return int A number that represents the MySQL client library version in format:
     *             .
     *             For example, 4.1.0 is returned as 40100.
     */
    public function $client_version($link)
    {
    }

    /**
     * Returns the error code from last connect call
     *
     * @return int An error code value for the last call to , if it failed.
     *             zero means no error occurred.
     */
    public function $connect_errno()
    {
    }

    /**
     * Returns a string description of the last connect error
     *
     * @return string A string that describes the error. null is returned if no error occurred.
     */
    public function $connect_error()
    {
    }

    /**
     * Returns the error code for the most recent function call
     *
     * @param mysqli $link
     *
     * @return int An error code value for the last call, if it failed. zero means no error
     *             occurred.
     */
    public function $errno($link)
    {
    }

    /**
     * Returns a string description of the last error
     *
     * @param mysqli $link
     *
     * @return string A string that describes the error. An empty string if no error occurred.
     */
    public function $error($link)
    {
    }

    /**
     * Returns a list of errors from the last command executed
     *
     * @param mysqli $link
     *
     * @return array A list of errors, each as an associative ``array``
     *               containing the errno, error, and sqlstate.
     */
    public function $error_list($link)
    {
    }

    /**
     * Returns the number of columns for the most recent query
     *
     * @param mysqli $link
     *
     * @return int An integer representing the number of fields in a result set.
     */
    public function $field_count($link)
    {
    }

    /**
     * Returns a string representing the type of connection used
     *
     * @param mysqli $link
     *
     * @return string A character string representing the server hostname and the connection type.
     */
    public function $host_info($link)
    {
    }

    /**
     * Retrieves information about the most recently executed query
     *
     * @param mysqli $link
     *
     * @return string A character string representing additional information about the most recently executed query.
     */
    public function $info($link)
    {
    }

    /**
     * Returns the auto generated id used in the last query
     *
     * @param mysqli $link
     *
     * @return mixed The value of the  field that was updated
     *               by the previous query. Returns zero if there was no previous query on the
     *               connection or if the query did not update an
     *               value.
     */
    public function $insert_id($link)
    {
    }

    /**
     * Returns the version of the MySQL protocol used
     *
     * @param mysqli $link
     *
     * @return int Returns an integer representing the protocol version.
     */
    public function $protocol_version($link)
    {
    }

    /**
     * Returns the version of the MySQL server
     *
     * @param mysqli $link
     *
     * @return string A character string representing the server version.
     */
    public function $server_info($link)
    {
    }

    /**
     * Returns the version of the MySQL server as an integer
     *
     * @param mysqli $link
     *
     * @return int An integer representing the server version.
     */
    public function $server_version($link)
    {
    }

    /**
     * Returns the SQLSTATE error from previous MySQL operation
     *
     * @param mysqli $link
     *
     * @return string Returns a string containing the SQLSTATE error code for the last error.
     *                The error code consists of five characters.  means no error.
     */
    public function $sqlstate($link)
    {
    }

    /**
     * Returns the thread ID for the current connection
     *
     * @param mysqli $link
     *
     * @return int Returns the Thread ID for the current connection.
     */
    public function $thread_id($link)
    {
    }

    /**
     * Returns the number of warnings from the last query for the given link
     *
     * @param mysqli $link
     *
     * @return int Number of warnings or zero if there are no warnings.
     */
    public function $warning_count($link)
    {
    }

    /**
     * Open a new connection to the MySQL server
     *
     * @param string $host
     * @param string $username
     * @param string $passwd
     * @param string $dbname
     * @param int $port
     * @param string $socket
     *
     * @return mysqli Returns an object which represents the connection to a MySQL Server.
     */
    public function __construct($host = 'ini_get("mysqli.default_host")', $username = 'ini_get("mysqli.default_user")', $passwd = 'ini_get("mysqli.default_pw")', $dbname = '', $port = false, $socket = 'ini_get("mysqli.default_socket")')
    {
    }

    /**
     * Turns on or off auto-committing database modifications
     *
     * @param bool $mode
     * @param mysqli $link
     * @param bool $mode
     *
     * @return bool 
     */
    public function autocommit($mode, $link, $mode)
    {
    }

    /**
     * Changes the user of the specified database connection
     *
     * @param string $user
     * @param string $password
     * @param string $database
     * @param mysqli $link
     * @param string $user
     * @param string $password
     * @param string $database
     *
     * @return bool 
     */
    public function change_user($user, $password, $database, $link, $user, $password, $database)
    {
    }

    /**
     * Returns the default character set for the database connection
     *
     * @param mysqli $link
     *
     * @return string The default character set for the current connection
     */
    public function character_set_name($link)
    {
    }

    /**
     * Closes a previously opened database connection
     *
     * @param mysqli $link
     *
     * @return bool 
     */
    public function close($link)
    {
    }

    /**
     * Commits the current transaction
     *
     * @param mysqli $link
     *
     * @return bool 
     */
    public function commit($link)
    {
    }

    /**
     * Performs debugging operations
     *
     * @param string $message
     * @param string $message
     *
     * @return bool Returns true.
     */
    public function debug($message, $message)
    {
    }

    /**
     * Disable reads from master
     *
     * @param mysqli $link
     *
     * @return bool
     */
    public function disable_reads_from_master($link)
    {
    }

    /**
     * Dump debugging information into the log
     *
     * @param mysqli $link
     *
     * @return bool 
     */
    public function dump_debug_info($link)
    {
    }

    /**
     * Returns a character set object
     *
     * @param mysqli $link
     *
     * @return object The function returns a character set object with the following properties:
     */
    public function get_charset($link)
    {
    }

    /**
     * Get MySQL client info
     *
     * @param mysqli $link
     *
     * @return string A string that represents the MySQL client library version
     */
    public function get_client_info($link)
    {
    }

    /**
     * Returns statistics about the client connection
     *
     * @param mysqli $link
     *
     * @return array Returns an array with connection stats if success, false otherwise.
     */
    public function get_connection_stats($link)
    {
    }

    /**
     * Get result of SHOW WARNINGS
     *
     * @param mysqli $link
     *
     * @return mysqli_warning
     */
    public function get_warnings($link)
    {
    }

    /**
     * Initializes MySQLi and returns a resource for use with mysqli_real_connect()
     *
     * @return mysqli Returns an object.
     */
    public function init()
    {
    }

    /**
     * Asks the server to kill a MySQL thread
     *
     * @param int $processid
     * @param mysqli $link
     * @param int $processid
     *
     * @return bool 
     */
    public function kill($processid, $link, $processid)
    {
    }

    /**
     * Check if there are any more query results from a multi query
     *
     * @param mysqli $link
     *
     * @return bool 
     */
    public function more_results($link)
    {
    }

    /**
     * Performs a query on the database
     *
     * @param string $query
     * @param mysqli $link
     * @param string $query
     *
     * @return bool Returns false if the first statement failed.
     *              To retrieve subsequent errors from other statements you have to call
     *              first.
     */
    public function multi_query($query, $link, $query)
    {
    }

    /**
     * Prepare next result from multi_query
     *
     * @param mysqli $link
     *
     * @return bool 
     */
    public function next_result($link)
    {
    }

    /**
     * Set options
     *
     * @param int $option
     * @param mixed $value
     * @param mysqli $link
     * @param int $option
     * @param mixed $value
     *
     * @return bool 
     */
    public function options($option, $value, $link, $option, $value)
    {
    }

    /**
     * Pings a server connection, or tries to reconnect if the connection has gone down
     *
     * @param mysqli $link
     *
     * @return bool 
     */
    public function ping($link)
    {
    }

    /**
     * Poll connections
     *
     * @param array $read
     * @param array $error
     * @param array $reject
     * @param int $sec
     * @param int $usec
     * @param array $read
     * @param array $error
     * @param array $reject
     * @param int $sec
     * @param int $usec
     *
     * @return int Returns number of ready connections in success, false otherwise.
     */
    public function poll(&$read, &$error, &$reject, $sec, $usec = NULL, &$read, &$error, &$reject, $sec, $usec = NULL)
    {
    }

    /**
     * Prepare an SQL statement for execution
     *
     * @param string $query
     * @param mysqli $link
     * @param string $query
     *
     * @return mysqli_stmt returns a statement object or false if an error occurred.
     */
    public function prepare($query, $link, $query)
    {
    }

    /**
     * Performs a query on the database
     *
     * @param string $query
     * @param int $resultmode
     * @param mysqli $link
     * @param string $query
     * @param int $resultmode
     *
     * @return mixed Returns false on failure. For successful  or
     *               queries  will return
     *               a ``mysqli_result`` object. For other successful queries  will
     *               return true.
     */
    public function query($query, $resultmode = false, $link, $query, $resultmode = false)
    {
    }

    /**
     * Opens a connection to a mysql server
     *
     * @param string $host
     * @param string $username
     * @param string $passwd
     * @param string $dbname
     * @param int $port
     * @param string $socket
     * @param int $flags
     * @param mysqli $link
     * @param string $host
     * @param string $username
     * @param string $passwd
     * @param string $dbname
     * @param int $port
     * @param string $socket
     * @param int $flags
     *
     * @return bool 
     */
    public function real_connect($host = NULL, $username = NULL, $passwd = NULL, $dbname = NULL, $port = NULL, $socket = NULL, $flags = NULL, $link, $host = NULL, $username = NULL, $passwd = NULL, $dbname = NULL, $port = NULL, $socket = NULL, $flags = NULL)
    {
    }

    /**
     * Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
     *
     * @param string $escapestr
     * @param string $escapestr
     * @param mysqli $link
     * @param string $escapestr
     *
     * @return string Returns an escaped string.
     */
    public function real_escape_string($escapestr, $escapestr, $link, $escapestr)
    {
    }

    /**
     * Execute an SQL query
     *
     * @param string $query
     * @param mysqli $link
     * @param string $query
     *
     * @return bool 
     */
    public function real_query($query, $link, $query)
    {
    }

    /**
     * Get result from async query
     *
     * @param mysql $link
     *
     * @return mysqli_result Returns ``mysqli_result`` in success, false otherwise.
     */
    public function reap_async_query($link)
    {
    }

    /**
     * Refreshes
     *
     * @param int $options
     * @param resource $link
     * @param int $options
     *
     * @return int true if the refresh was a success, otherwise false
     */
    public function refresh($options, $link, $options)
    {
    }

    /**
     * Rolls back current transaction
     *
     * @param mysqli $link
     *
     * @return bool 
     */
    public function rollback($link)
    {
    }

    /**
     * Returns RPL query type
     *
     * @param string $query
     * @param mysqli $link
     * @param string $query
     *
     * @return int
     */
    public function rpl_query_type($query, $link, $query)
    {
    }

    /**
     * Selects the default database for database queries
     *
     * @param string $dbname
     * @param mysqli $link
     * @param string $dbname
     *
     * @return bool 
     */
    public function select_db($dbname, $link, $dbname)
    {
    }

    /**
     * Send the query and return
     *
     * @param string $query
     * @param mysqli $link
     * @param string $query
     *
     * @return bool
     */
    public function send_query($query, $link, $query)
    {
    }

    /**
     * Sets the default client character set
     *
     * @param string $charset
     * @param mysqli $link
     * @param string $charset
     *
     * @return bool 
     */
    public function set_charset($charset, $link, $charset)
    {
    }

    /**
     * Unsets user defined handler for load local infile command
     *
     * @param mysqli $link
     *
     * @return void 
     */
    public function set_local_infile_default($link)
    {
    }

    /**
     * Set callback function for LOAD DATA LOCAL INFILE command
     *
     * @param mysqli $link
     * @param callable $read_func
     * @param mysqli $link
     * @param callable $read_func
     *
     * @return bool 
     */
    public function set_local_infile_handler($link, $read_func, $link, $read_func)
    {
    }

    /**
     * Used for establishing secure connections using SSL
     *
     * @param string $key
     * @param string $cert
     * @param string $ca
     * @param string $capath
     * @param string $cipher
     * @param mysqli $link
     * @param string $key
     * @param string $cert
     * @param string $ca
     * @param string $capath
     * @param string $cipher
     *
     * @return bool This function always returns true value. If SSL setup is
     *              incorrect  will return an error
     *              when you attempt to connect.
     */
    public function ssl_set($key, $cert, $ca, $capath, $cipher, $link, $key, $cert, $ca, $capath, $cipher)
    {
    }

    /**
     * Gets the current system status
     *
     * @param mysqli $link
     *
     * @return string A string describing the server status. false if an error occurred.
     */
    public function stat($link)
    {
    }

    /**
     * Initializes a statement and returns an object for use with mysqli_stmt_prepare
     *
     * @param mysqli $link
     *
     * @return mysqli_stmt Returns an object.
     */
    public function stmt_init($link)
    {
    }

    /**
     * Transfers a result set from the last query
     *
     * @param mysqli $link
     *
     * @return mysqli_result Returns a buffered result object or false if an error occurred.
     */
    public function store_result($link)
    {
    }

    /**
     * Returns whether thread safety is given or not
     *
     * @return bool true if the client library is thread-safe, otherwise false.
     */
    public function thread_safe()
    {
    }

    /**
     * Initiate a result set retrieval
     *
     * @param mysqli $link
     *
     * @return mysqli_result Returns an unbuffered result object or false if an error occurred.
     */
    public function use_result($link)
    {
    }
}