<?php

/** @phpstub */
class Mongo
{
    const DEFAULT_HOST = '"localhost"';
    const DEFAULT_PORT = 27017;
    const RP_NEAREST = 4;
    const RP_PRIMARY = 0;
    const RP_PRIMARY_PREFERRED = 1;
    const RP_SECONDARY = 2;
    const RP_SECONDARY_PREFERRED = 3;
    const VERSION = '';

    /** @var string */
    public $status;

    /** @var boolean */
    public $connected;

    /** @var string */
    protected $server;

    /** @var boolean */
    protected $persistent;

    /**
     * Creates a new database connection object
     *
     * @param string $server
     * @param array $options
     */
    public function __construct($server = 'mongodb://localhost:27017', $options = 'array("connect" => true)')
    {
    }

    /**
     * Gets a database
     *
     * @param string $dbname
     *
     * @return MongoDB Returns a new db object.
     */
    public function __get($dbname)
    {
    }

    /**
     * String representation of this connection
     *
     * @return string Returns hostname and port for this connection.
     */
    public function __toString()
    {
    }

    /**
     * Closes this connection
     *
     * @param boolean|string $connection
     *
     * @return bool Returns if the connection was successfully closed.
     */
    public function close($connection = NULL)
    {
    }

    /**
     * Connects to a database server
     *
     * @return bool If the connection was successful.
     */
    public function connect()
    {
    }

    /**
     * Connects with a database server
     *
     * @return bool If the connection was successful.
     */
    public function connectUtil()
    {
    }

    /**
     * Drops a database [deprecated]
     *
     * @param mixed $db
     *
     * @return array Returns the database response.
     */
    public function dropDB($db)
    {
    }

    /**
     * Updates status for all hosts associated with this
     *
     * @return array Returns an array of information about the hosts in the set.  Includes each
     *               host's hostname, its health (1 is healthy), its state (1 is primary, 2 is
     *               secondary, 0 is anything else), the amount of time it took to ping the
     *               server, and when the last ping occurred. For example, on a three-member
     *               replica set, it might look something like:
     */
    public function getHosts()
    {
    }

    /**
     * Get pool size for connection pools
     *
     * @return int Returns the current pool size.
     */
    public function getPoolSize()
    {
    }

    /**
     * Get the read preference for this connection
     *
     * @return array This function returns an array describing the read preference. The array
     *               contains the values  for the numeric read preference
     *               mode,  for the name of the read preference
     *               mode, and  containing a list of all tag set
     *               criteria. If no tag sets were specified,  will not
     *               be present in the array.
     */
    public function getReadPreference()
    {
    }

    /**
     * Returns the address being used by this for slaveOkay reads
     *
     * @return string The address of the slave this connection is using for reads.
     */
    public function getSlave()
    {
    }

    /**
     * Get slaveOkay setting for this connection
     *
     * @return bool Returns the value of slaveOkay for this instance.
     */
    public function getSlaveOkay()
    {
    }

    /**
     * Lists all of the databases available.
     *
     * @return array Returns an associative array containing three fields.  The first field is
     *               , which in turn contains an array.  Each element
     *               of the array is an associative array corresponding to a database, giving the
     *               database's name, size, and if it's empty.  The other two fields are
     *               (in bytes) and , which is 1
     *               if this method ran successfully.
     */
    public function listDBs()
    {
    }

    /**
     * Returns information about all connection pools.
     *
     * @return array Each connection pool has an identifier, which starts with the host. For each
     *               pool, this function shows the following fields:
     */
    public function poolDebug()
    {
    }

    /**
     * Gets a database collection
     *
     * @param string $db
     * @param string $collection
     *
     * @return MongoCollection Returns a new collection object.
     */
    public function selectCollection($db, $collection)
    {
    }

    /**
     * Gets a database
     *
     * @param string $name
     *
     * @return MongoDB Returns a new db object.
     */
    public function selectDB($name)
    {
    }

    /**
     * Set the size for future connection pools.
     *
     * @param int $size
     *
     * @return bool Returns the former value of pool size.
     */
    public function setPoolSize($size)
    {
    }

    /**
     * Set the read preference for this connection
     *
     * @param int $read_preference
     * @param array $tags
     *
     * @return bool
     */
    public function setReadPreference($read_preference, $tags = array())
    {
    }

    /**
     * Change slaveOkay setting for this connection
     *
     * @param bool $ok
     *
     * @return bool Returns the former value of slaveOkay for this instance.
     */
    public function setSlaveOkay($ok = 'true')
    {
    }

    /**
     * Choose a new slave for slaveOkay reads
     *
     * @return string The address of the slave this connection is using for reads.  This may be the
     *                same as the previous address as addresses are randomly chosen.  It may return
     *                only one address if only one secondary (or only the primary) is available.
     */
    public function switchSlave()
    {
    }
}