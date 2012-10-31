<?php

/** @phpstub */
class MysqlndUhConnection
{
    /**
     * The __construct purpose
     */
    public function __construct()
    {
    }

    /**
     * Changes the user of the specified mysqlnd database connection
     *
     * @param mysqlnd_connection $connection
     * @param string $user
     * @param string $password
     * @param string $database
     * @param bool $silent
     * @param int $passwd_len
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function changeUser($connection, $user, $password, $database, $silent, $passwd_len)
    {
    }

    /**
     * Returns the default character set for the database connection
     *
     * @param mysqlnd_connection $connection
     *
     * @return string The default character set.
     */
    public function charsetName($connection)
    {
    }

    /**
     * Closes a previously opened database connection
     *
     * @param mysqlnd_connection $connection
     * @param int $close_type
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function close($connection, $close_type)
    {
    }

    /**
     * Open a new connection to the MySQL server
     *
     * @param mysqlnd_connection $connection
     * @param string $host
     * @param string $use"
     * @param string $password
     * @param string $database
     * @param int $port
     * @param string $socket
     * @param int $mysql_flags
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function connect($connection, $host, $use", $password, $database, $port, $socket, $mysql_flags)
    {
    }

    /**
     * End a persistent connection
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function endPSession($connection)
    {
    }

    /**
     * 
       Escapes special characters in a string for use in an SQL statement,
       taking into account the current charset of the connection
      
     *
     * @param mysqlnd_connection $connection
     * @param string $escape_string
     *
     * @return string The escaped string.
     */
    public function escapeString($connection, $escape_string)
    {
    }

    /**
     * Gets the number of affected rows in a previous MySQL operation
     *
     * @param mysqlnd_connection $connection
     *
     * @return int Number of affected rows.
     */
    public function getAffectedRows($connection)
    {
    }

    /**
     * Returns the error code for the most recent function call
     *
     * @param mysqlnd_connection $connection
     *
     * @return int Error code for the most recent function call.
     */
    public function getErrorNumber($connection)
    {
    }

    /**
     * Returns a string description of the last error
     *
     * @param mysqlnd_connection $connection
     *
     * @return string Error string for the most recent function call.
     */
    public function getErrorString($connection)
    {
    }

    /**
     * Returns the number of columns for the most recent query
     *
     * @param mysqlnd_connection $connection
     *
     * @return int Number of columns.
     */
    public function getFieldCount($connection)
    {
    }

    /**
     * Returns a string representing the type of connection used
     *
     * @param mysqlnd_connection $connection
     *
     * @return string Connection description.
     */
    public function getHostInformation($connection)
    {
    }

    /**
     * Returns the auto generated id used in the last query.
     *
     * @param mysqlnd_connection $connection
     *
     * @return int Last insert id.
     */
    public function getLastInsertId($connection)
    {
    }

    /**
     * Retrieves information about the most recently executed query
     *
     * @param mysqlnd_connection $connection
     *
     * @return void Last message. Trying to return a string longer than 511 bytes
     *              will cause an error of the type  and
     *              result in the string being truncated.
     */
    public function getLastMessage($connection)
    {
    }

    /**
     * Returns the version of the MySQL protocol used
     *
     * @param mysqlnd_connection $connection
     *
     * @return string The protocol version.
     */
    public function getProtocolInformation($connection)
    {
    }

    /**
     * Returns the version of the MySQL server
     *
     * @param mysqlnd_connection $connection
     *
     * @return string The server version.
     */
    public function getServerInformation($connection)
    {
    }

    /**
     * Gets the current system status
     *
     * @param mysqlnd_connection $connection
     *
     * @return string The system status message.
     */
    public function getServerStatistics($connection)
    {
    }

    /**
     * Returns the version of the MySQL server as an integer
     *
     * @param mysqlnd_connection $connection
     *
     * @return int The MySQL version.
     */
    public function getServerVersion($connection)
    {
    }

    /**
     * Returns the SQLSTATE error from previous MySQL operation
     *
     * @param mysqlnd_connection $connection
     *
     * @return string The SQLSTATE code.
     */
    public function getSqlstate($connection)
    {
    }

    /**
     * Returns statistics about the client connection.
     *
     * @param mysqlnd_connection $connection
     *
     * @return array Connection statistics collected by mysqlnd.
     */
    public function getStatistics($connection)
    {
    }

    /**
     * Returns the thread ID for the current connection
     *
     * @param mysqlnd_connection $connection
     *
     * @return int Connection thread id.
     */
    public function getThreadId($connection)
    {
    }

    /**
     * Returns the number of warnings from the last query for the given link
     *
     * @param mysqlnd_connection $connection
     *
     * @return int Number of warnings.
     */
    public function getWarningCount($connection)
    {
    }

    /**
     * Initialize mysqlnd connection
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function init($connection)
    {
    }

    /**
     * Asks the server to kill a MySQL thread
     *
     * @param mysqlnd_connection $connection
     * @param int $pid
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function killConnection($connection, $pid)
    {
    }

    /**
     * List MySQL table fields
     *
     * @param mysqlnd_connection $connection
     * @param string $table
     * @param string $achtung_wild
     *
     * @return array 
     */
    public function listFields($connection, $table, $achtung_wild)
    {
    }

    /**
     * Wrapper for assorted list commands
     *
     * @param mysqlnd_connection $connection
     * @param string $query
     * @param string $achtung_wild
     * @param string $par1
     *
     * @return void TODO
     */
    public function listMethod($connection, $query, $achtung_wild, $par1)
    {
    }

    /**
     * Check if there are any more query results from a multi query
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function moreResults($connection)
    {
    }

    /**
     * Prepare next result from multi_query
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function nextResult($connection)
    {
    }

    /**
     * Pings a server connection, or tries to reconnect if the connection has gone down
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function ping($connection)
    {
    }

    /**
     * Performs a query on the database
     *
     * @param mysqlnd_connection $connection
     * @param string $query
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function query($connection, $query)
    {
    }

    /**
     * Read a result set header
     *
     * @param mysqlnd_connection $connection
     * @param mysqlnd_statement $mysqlnd_stmt
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function queryReadResultsetHeader($connection, $mysqlnd_stmt)
    {
    }

    /**
     * Get result from async query
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function reapQuery($connection)
    {
    }

    /**
     * Flush or reset tables and caches
     *
     * @param mysqlnd_connection $connection
     * @param int $options
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function refreshServer($connection, $options)
    {
    }

    /**
     * Restart a persistent mysqlnd connection
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function restartPSession($connection)
    {
    }

    /**
     * Selects the default database for database queries
     *
     * @param mysqlnd_connection $connection
     * @param string $database
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function selectDb($connection, $database)
    {
    }

    /**
     * Sends a close command to MySQL
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function sendClose($connection)
    {
    }

    /**
     * Sends a query to MySQL
     *
     * @param mysqlnd_connection $connection
     * @param string $query
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function sendQuery($connection, $query)
    {
    }

    /**
     * Dump debugging information into the log for the MySQL server
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function serverDumpDebugInformation($connection)
    {
    }

    /**
     * Turns on or off auto-committing database modifications
     *
     * @param mysqlnd_connection $connection
     * @param int $mode
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function setAutocommit($connection, $mode)
    {
    }

    /**
     * Sets the default client character set
     *
     * @param mysqlnd_connection $connection
     * @param string $charset
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function setCharset($connection, $charset)
    {
    }

    /**
     * Sets a client option
     *
     * @param mysqlnd_connection $connection
     * @param int $option
     * @param int $value
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function setClientOption($connection, $option, $value)
    {
    }

    /**
     * Sets a server option
     *
     * @param mysqlnd_connection $connection
     * @param int $option
     *
     * @return void Returns true on success.
     *              Otherwise, returns false
     */
    public function setServerOption($connection, $option)
    {
    }

    /**
     * The shutdownServer purpose
     *
     * @param string $MYSQLND_UH_RES_MYSQLND_NAME
     * @param string $"level"
     *
     * @return void 
     */
    public function shutdownServer($MYSQLND_UH_RES_MYSQLND_NAME, $"level")
    {
    }

    /**
     * Sends a basic COM_* command
     *
     * @param mysqlnd_connection $connection
     * @param int $command
     * @param string $arg
     * @param int $ok_packet
     * @param bool $silent
     * @param bool $ignore_upsert_status
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function simpleCommand($connection, $command, $arg, $ok_packet, $silent, $ignore_upsert_status)
    {
    }

    /**
     * Process a response for a basic COM_* command send to the client
     *
     * @param mysqlnd_connection $connection
     * @param int $ok_packet
     * @param bool $silent
     * @param int $command
     * @param bool $ignore_upsert_status
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function simpleCommandHandleResponse($connection, $ok_packet, $silent, $command, $ignore_upsert_status)
    {
    }

    /**
     * Used for establishing secure connections using SSL
     *
     * @param mysqlnd_connection $connection
     * @param string $key
     * @param string $cert
     * @param string $ca
     * @param string $capath
     * @param string $cipher
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function sslSet($connection, $key, $cert, $ca, $capath, $cipher)
    {
    }

    /**
     * Initializes a statement and returns a resource for use with mysqli_statement::prepare
     *
     * @param mysqlnd_connection $connection
     *
     * @return resource Resource of type .
     *                  The documentation may also refer to such resources using the alias name
     *                  .
     */
    public function stmtInit($connection)
    {
    }

    /**
     * Transfers a result set from the last query
     *
     * @param mysqlnd_connection $connection
     *
     * @return resource Resource of type .
     *                  The documentation may also refer to such resources using the alias name
     *                  .
     */
    public function storeResult($connection)
    {
    }

    /**
     * Commits the current transaction
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function txCommit($connection)
    {
    }

    /**
     * Rolls back current transaction
     *
     * @param mysqlnd_connection $connection
     *
     * @return bool Returns true on success.
     *              Otherwise, returns false
     */
    public function txRollback($connection)
    {
    }

    /**
     * Initiate a result set retrieval
     *
     * @param mysqlnd_connection $connection
     *
     * @return resource Resource of type .
     *                  The documentation may also refer to such resources using the alias name
     *                  .
     */
    public function useResult($connection)
    {
    }
}