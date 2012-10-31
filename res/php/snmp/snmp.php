<?php

/** @phpstub */
class SNMP
{
    const ERRNO_ANY = 126;
    const ERRNO_ERROR_IN_REPLY = 8;
    const ERRNO_GENERIC = 2;
    const ERRNO_MULTIPLE_SET_QUERIES = 64;
    const ERRNO_NOERROR = 0;
    const ERRNO_OID_NOT_INCREASING = 16;
    const ERRNO_OID_PARSING_ERROR = 32;
    const ERRNO_TIMEOUT = 4;
    const VERSION_1 = 0;
    const VERSION_2c = 1;
    const VERSION_2C = 1;
    const VERSION_3 = 3;

    /** @var int */
    public $valueretrieval;

    /** @var bool */
    public $quick_print;

    /** @var int */
    public $oid_output_format;

    /** @var bool */
    public $oid_increasing_check;

    /** @var int */
    public $max_oids;

    /** @var array */
    public $info;

    /** @var int */
    public $exceptions_enabled;

    /** @var bool */
    public $enum_print;

    /**
     * Creates SNMP instance representing session to remote  agent
     */
    public function __construct()
    {
    }

    /**
     * Close  session
     *
     * @return bool 
     */
    public function close()
    {
    }

    /**
     * Fetch an  object
     *
     * @param mixed $object_id
     * @param bool $preserve_keys
     *
     * @return mixed Returns  objects requested as string or array
     *               depending on  type or false on error.
     */
    public function get($object_id, $preserve_keys = 'false')
    {
    }

    /**
     * Get last error code
     *
     * @return int Returns one of SNMP error code values described in constants chapter.
     */
    public function getErrno()
    {
    }

    /**
     * Get last error message
     *
     * @return string String describing error from last SNMP request.
     */
    public function getError()
    {
    }

    /**
     * Fetch an  object which
      follows the given object id
      
     *
     * @param mixed $object_id
     *
     * @return mixed Returns  objects requested as string or array
     *               depending on  type or false on error.
     */
    public function getnext($object_id)
    {
    }

    /**
     * Set the value of an SNMP object
     *
     * @param mixed $object_id
     * @param mixed $type
     * @param mixed $value
     *
     * @return bool 
     */
    public function set($object_id, $type, $value)
    {
    }

    /**
     * Configures security-related v3 session parameters
     *
     * @param string $sec_level
     * @param string $auth_protocol
     * @param string $auth_passphrase
     * @param string $priv_protocol
     * @param string $priv_passphrase
     * @param string $contextName
     * @param string $contextEngineID
     *
     * @return bool 
     */
    public function setSecurity($sec_level, $auth_protocol = '', $auth_passphrase = '', $priv_protocol = '', $priv_passphrase = '', $contextName = '', $contextEngineID = '')
    {
    }

    /**
     * Fetch  object subtree
     *
     * @param string $object_id
     * @param bool $suffix_as_key
     * @param int $max_repetitions
     * @param int $non_repeaters
     *
     * @return array Returns an associative array of the  object ids and their values on success or false on error.
     *               When a  error occures  and
     *               can be used for retrieving error
     *               number (specific to SNMP extension, see class constants) and error message
     *               respectively.
     */
    public function walk($object_id, $suffix_as_key = 'false', $max_repetitions = NULL, $non_repeaters = NULL)
    {
    }
}