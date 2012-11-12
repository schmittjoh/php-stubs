<?php

/** @phpstub */
class PDO
{
    const ATTR_AUTOCOMMIT = NULL;
    const ATTR_CASE = NULL;
    const ATTR_CLIENT_VERSION = NULL;
    const ATTR_CONNECTION_STATUS = NULL;
    const ATTR_CURSOR = NULL;
    const ATTR_CURSOR_NAME = NULL;
    const ATTR_DEFAULT_FETCH_MODE = NULL;
    const ATTR_DRIVER_NAME = NULL;
    const ATTR_EMULATE_PREPARES = NULL;
    const ATTR_ERRMODE = NULL;
    const ATTR_FETCH_CATALOG_NAMES = NULL;
    const ATTR_FETCH_TABLE_NAMES = NULL;
    const ATTR_MAX_COLUMN_LEN = NULL;
    const ATTR_ORACLE_NULLS = NULL;
    const ATTR_PERSISTENT = NULL;
    const ATTR_PREFETCH = NULL;
    const ATTR_SERVER_INFO = NULL;
    const ATTR_SERVER_VERSION = NULL;
    const ATTR_STATEMENT_CLASS = NULL;
    const ATTR_STRINGIFY_FETCHES = NULL;
    const ATTR_TIMEOUT = NULL;
    const CASE_LOWER = NULL;
    const CASE_NATURAL = NULL;
    const CASE_UPPER = NULL;
    const CURSOR_FWDONLY = NULL;
    const CURSOR_SCROLL = NULL;
    const ERR_NONE = NULL;
    const ERRMODE_EXCEPTION = NULL;
    const ERRMODE_SILENT = NULL;
    const ERRMODE_WARNING = NULL;
    const FB_ATTR_DATE_FORMAT = NULL;
    const FB_ATTR_TIME_FORMAT = NULL;
    const FB_ATTR_TIMESTAMP_FORMAT = NULL;
    const FETCH_ASSOC = NULL;
    const FETCH_BOTH = NULL;
    const FETCH_BOUND = NULL;
    const FETCH_CLASS = NULL;
    const FETCH_CLASSTYPE = NULL;
    const FETCH_COLUMN = NULL;
    const FETCH_FUNC = NULL;
    const FETCH_GROUP = NULL;
    const FETCH_INTO = NULL;
    const FETCH_KEY_PAIR = NULL;
    const FETCH_LAZY = NULL;
    const FETCH_NAMED = NULL;
    const FETCH_NUM = NULL;
    const FETCH_OBJ = NULL;
    const FETCH_ORI_ABS = NULL;
    const FETCH_ORI_FIRST = NULL;
    const FETCH_ORI_LAST = NULL;
    const FETCH_ORI_NEXT = NULL;
    const FETCH_ORI_PRIOR = NULL;
    const FETCH_ORI_REL = NULL;
    const FETCH_PROPS_LATE = NULL;
    const FETCH_SERIALIZE = NULL;
    const FETCH_UNIQUE = NULL;
    const MYSQL_ATTR_CIPHER = NULL;
    const MYSQL_ATTR_COMPRESS = NULL;
    const MYSQL_ATTR_DIRECT_QUERY = NULL;
    const MYSQL_ATTR_FOUND_ROWS = NULL;
    const MYSQL_ATTR_IGNORE_SPACE = NULL;
    const MYSQL_ATTR_INIT_COMMAND = NULL;
    const MYSQL_ATTR_KEY = NULL;
    const MYSQL_ATTR_LOCAL_INFILE = NULL;
    const MYSQL_ATTR_MAX_BUFFER_SIZE = NULL;
    const MYSQL_ATTR_READ_DEFAULT_FILE = NULL;
    const MYSQL_ATTR_READ_DEFAULT_GROUP = NULL;
    const MYSQL_ATTR_SSL_CA = NULL;
    const MYSQL_ATTR_SSL_CAPATH = NULL;
    const MYSQL_ATTR_SSL_CERT = NULL;
    const MYSQL_ATTR_USE_BUFFERED_QUERY = NULL;
    const NULL_EMPTY_STRING = NULL;
    const NULL_NATURAL = NULL;
    const NULL_TO_STRING = NULL;
    const PARAM_BOOL = NULL;
    const PARAM_EVT_ALLOC = NULL;
    const PARAM_EVT_EXEC_POST = NULL;
    const PARAM_EVT_EXEC_PRE = NULL;
    const PARAM_EVT_FETCH_POST = NULL;
    const PARAM_EVT_FETCH_PRE = NULL;
    const PARAM_EVT_FREE = NULL;
    const PARAM_EVT_NORMALIZE = NULL;
    const PARAM_INPUT_OUTPUT = NULL;
    const PARAM_INT = NULL;
    const PARAM_LOB = NULL;
    const PARAM_NULL = NULL;
    const PARAM_STMT = NULL;
    const PARAM_STR = NULL;
    const SQLSRV_ATTR_DIRECT_QUERY = NULL;
    const SQLSRV_ATTR_QUERY_TIMEOUT = NULL;
    const SQLSRV_ENCODING_BINARY = NULL;
    const SQLSRV_ENCODING_DEFAULT = NULL;
    const SQLSRV_ENCODING_SYSTEM = NULL;
    const SQLSRV_ENCODING_UTF8 = NULL;
    const SQLSRV_TXN_READ_COMMITTED = NULL;
    const SQLSRV_TXN_READ_UNCOMMITTED = NULL;
    const SQLSRV_TXN_REPEATABLE_READ = NULL;
    const SQLSRV_TXN_SERIALIZABLE = NULL;
    const SQLSRV_TXN_SNAPSHOT = NULL;

    /**
     * 
       Creates a PDO instance representing a connection to a database
      
     */
    public function __construct()
    {
    }

    /**
     * 
       Initiates a transaction
      
     *
     * @return bool 
     */
    public function beginTransaction()
    {
    }

    /**
     * 
       Commits a transaction
      
     *
     * @return bool 
     */
    public function commit()
    {
    }

    /**
     * Get the requested schema information
     *
     * @param int $schema_type
     * @param string $table_name
     * @param string $col_name
     *
     * @return array Array containing the schema information, when process is successful;
     */
    public function cubrid_schema($schema_type, $table_name = NULL, $col_name = NULL)
    {
    }

    /**
     * 
       Fetch the SQLSTATE associated with the last operation on the database handle
      
     *
     * @return mixed Returns an SQLSTATE, a five characters alphanumeric identifier defined in
     *               the ANSI SQL-92 standard.  Briefly, an SQLSTATE consists of a
     *               two characters class value followed by a three characters subclass value. A
     *               class value of 01 indicates a warning and is accompanied by a return code
     *               of SQL_SUCCESS_WITH_INFO. Class values other than '01', except for the
     *               class 'IM', indicate an error.  The class 'IM' is specific to warnings
     *               and errors that derive from the implementation of PDO (or perhaps ODBC,
     *               if you're using the ODBC driver) itself.  The subclass value '000' in any
     *               class indicates that there is no subclass for that SQLSTATE.
     */
    public function errorCode()
    {
    }

    /**
     * 
       Fetch extended error information associated with the last operation on the database handle
      
     *
     * @return array returns an array of error information
     *               about the last operation performed by this database handle. The array
     *               consists of the following fields:
     */
    public function errorInfo()
    {
    }

    /**
     * 
       Execute an SQL statement and return the number of affected rows
      
     *
     * @param string $statement
     *
     * @return int returns the number of rows that were modified
     *             or deleted by the SQL statement you issued. If no rows were affected,
     *             returns .
     */
    public function exec($statement)
    {
    }

    /**
     * 
       Retrieve a database connection attribute
      
     *
     * @param int $attribute
     *
     * @return mixed A successful call returns the value of the requested PDO attribute.
     *               An unsuccessful call returns .
     */
    public function getAttribute($attribute)
    {
    }

    /**
     * 
       Return an array of available PDO drivers
      
     *
     * @return array returns an array of PDO driver names. If
     *               no drivers are available, it returns an empty array.
     */
    public function getAvailableDrivers()
    {
    }

    /**
     * 
       Checks if inside a transaction
      
     *
     * @return bool Returns true if a transaction is currently active, and false if not.
     */
    public function inTransaction()
    {
    }

    /**
     * 
       Returns the ID of the last inserted row or sequence value
      
     *
     * @param string $name
     *
     * @return string If a sequence name was not specified for the
     *                parameter,  returns a
     *                string representing the row ID of the last row that was inserted into
     *                the database.
     */
    public function lastInsertId($name = NULL)
    {
    }

    /**
     * Creates a new large object
     *
     * @return string Returns the OID of the newly created large object on success, or false
     *                on failure.
     */
    public function pgsqlLOBCreate()
    {
    }

    /**
     * Opens an existing large object stream
     *
     * @param string $oid
     * @param string $mode
     *
     * @return resource Returns a stream resource on success.
     */
    public function pgsqlLOBOpen($oid, $mode = 'rb')
    {
    }

    /**
     * Deletes the large object
     *
     * @param string $oid
     *
     * @return bool 
     */
    public function pgsqlLOBUnlink($oid)
    {
    }

    /**
     * 
       Prepares a statement for execution and returns a statement object
      
     *
     * @param string $statement
     * @param array $driver_options
     *
     * @return PDOStatement If the database server successfully prepares the statement,
     *                      returns a
     *                      ``PDOStatement`` object.
     *                      If the database server cannot successfully prepare the statement,
     *                      returns false or emits
     *                      ``PDOException`` (depending on ).
     */
    public function prepare($statement, $driver_options = array())
    {
    }

    /**
     * 
       Executes an SQL statement, returning a result set as a PDOStatement object
      
     *
     * @param string $statement
     * @param string $statement
     * @param int $PDO::FETCH_COLUMN
     * @param int $colno
     * @param string $statement
     * @param int $PDO::FETCH_CLASS
     * @param string $classname
     * @param array $ctorargs
     * @param string $statement
     * @param int $PDO::FETCH_INTO
     * @param object $object
     *
     * @return PDOStatement returns a PDOStatement object, or false
     *                      on failure.
     */
    public function query($statement, $statement, $PDO::FETCH_COLUMN, $colno, $statement, $PDO::FETCH_CLASS, $classname, $ctorargs, $statement, $PDO::FETCH_INTO, $object)
    {
    }

    /**
     * 
       Quotes a string for use in a query.
      
     *
     * @param string $string
     * @param int $parameter_type
     *
     * @return string Returns a quoted string that is theoretically safe to pass into an
     *                SQL statement.  Returns false if the driver does not support quoting in
     *                this way.
     */
    public function quote($string, $parameter_type = false)
    {
    }

    /**
     * 
       Rolls back a transaction
      
     *
     * @return bool 
     */
    public function rollBack()
    {
    }

    /**
     * 
       Set an attribute
      
     *
     * @param int $attribute
     * @param mixed $value
     *
     * @return bool 
     */
    public function setAttribute($attribute, $value)
    {
    }

    /**
     * 
       Registers an aggregating User Defined Function for use in SQL statements
      
     *
     * @param string $function_name
     * @param callable $step_func
     * @param callable $finalize_func
     * @param int $num_args
     *
     * @return bool 
     */
    public function sqliteCreateAggregate($function_name, $step_func, $finalize_func, $num_args = NULL)
    {
    }

    /**
     * 
       Registers a User Defined Function for use in SQL statements
      
     *
     * @param string $function_name
     * @param callable $callback
     * @param int $num_args
     *
     * @return bool 
     */
    public function sqliteCreateFunction($function_name, $callback, $num_args = NULL)
    {
    }
}