<?php

/** @phpstub */
class MongoCollection
{
    const ASCENDING = 1;
    const DESCENDING = -1;

    /** @var integer */
    public $wtimeout;

    /** @var integer */
    public $w;

    /** @var MongoDB */
    public $db;

    /**
     * Creates a new collection
     *
     * @param MongoDB $db
     * @param string $name
     */
    public function __construct($db, $name)
    {
    }

    /**
     * Gets a collection
     *
     * @param string $name
     *
     * @return MongoCollection Returns the collection.
     */
    public function __get($name)
    {
    }

    /**
     * String representation of this collection
     *
     * @return string Returns the full name of this collection.
     */
    public function __toString()
    {
    }

    /**
     * Perform an aggregation using the aggregation framework
     *
     * @phpstub-variable-parameters
     *
     * @param array $pipeline
     * @param array $op
     * @param array $_
     *
     * @return array The result of the aggregation as an array. The  will
     *               be set to  on success,  on failure.
     */
    public function aggregate($pipeline, $op = array(), $_ = array())
    {
    }

    /**
     * Inserts multiple documents into this collection
     *
     * @param array $a
     * @param array $options
     *
     * @return mixed If "safe" is set, returns an associative array with the status of the inserts
     *               ("ok") and any error that may have occured ("err").  Otherwise, returns
     *               true if the batch insert was successfully sent, false otherwise.
     */
    public function batchInsert($a, $options = 'array()')
    {
    }

    /**
     * Counts the number of documents in this collection
     *
     * @param array $query
     * @param int $limit
     * @param int $skip
     *
     * @return int Returns the number of documents matching the query.
     */
    public function count($query = 'array()', $limit = 0, $skip = 0)
    {
    }

    /**
     * Creates a database reference
     *
     * @param array $a
     *
     * @return array Returns a database reference array.
     */
    public function createDBRef($a)
    {
    }

    /**
     * Deletes an index from this collection
     *
     * @param string|array $keys
     *
     * @return array Returns the generated name of the key if successful, or null otherwise.
     */
    public function deleteIndex($keys)
    {
    }

    /**
     * Delete all indices for this collection
     *
     * @return array Returns the database response.
     */
    public function deleteIndexes()
    {
    }

    /**
     * Retrieve a list of distinct values for the given key across a collection.
     *
     * @param string $key
     * @param array $query
     *
     * @return array Returns an array of distinct values,
     */
    public function distinct($key, $query = array())
    {
    }

    /**
     * Drops this collection
     *
     * @return array Returns the database response.
     */
    public function drop()
    {
    }

    /**
     * 
       Creates an index on the given field(s), or does nothing if the index 
       already exists
      
     *
     * @param string|array $key|keys
     * @param array $options
     *
     * @return bool Returns true.
     */
    public function ensureIndex($key|keys, $options = 'array()')
    {
    }

    /**
     * Querys this collection, returning a ``MongoCursor``
      for the result set
     *
     * @param array $query
     * @param array $fields
     *
     * @return MongoCursor Returns a cursor for the search results.
     */
    public function find($query = 'array()', $fields = 'array()')
    {
    }

    /**
     * Update a document and return it
     *
     * @param array $query
     * @param array $update
     * @param array $fields
     * @param array $options
     *
     * @return void Returns the original document, or the modified document when
     *              is set.
     */
    public function findAndModify($query, $update = array(), $fields = array(), $options = array())
    {
    }

    /**
     * Querys this collection, returning a single element
     *
     * @param array $query
     * @param array $fields
     *
     * @return array Returns record matching the search or null.
     */
    public function findOne($query = 'array()', $fields = 'array()')
    {
    }

    /**
     * Fetches the document pointed to by a database reference
     *
     * @param array $ref
     *
     * @return array Returns the database document pointed to by the reference.
     */
    public function getDBRef($ref)
    {
    }

    /**
     * Returns information about indexes on this collection
     *
     * @return array This function returns an array in which each elements describes an array.
     *               The elements contain the values  for the name of
     *               the index,  for the namespace (the name of the
     *               collection),  containing a list of all the keys
     *               and their sort order that make up the index and
     *               containing a MongoID object with the ID of this index.
     */
    public function getIndexInfo()
    {
    }

    /**
     * Returns this collectionaposs name
     *
     * @return string Returns the name of this collection.
     */
    public function getName()
    {
    }

    /**
     * Get the read preference for this collection
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
     * Get slaveOkay setting for this collection
     *
     * @return bool Returns the value of slaveOkay for this instance.
     */
    public function getSlaveOkay()
    {
    }

    /**
     * Performs an operation similar to SQL's GROUP BY command
     *
     * @param mixed $keys
     * @param array $initial
     * @param MongoCode $reduce
     * @param array $options
     *
     * @return array Returns an array containing the result.
     */
    public function group($keys, $initial, $reduce, $options = 'array()')
    {
    }

    /**
     * Inserts an array into the collection
     *
     * @param array $a
     * @param array $options
     *
     * @return bool|array Returns an array containing the status of the insertion if the
     *                    option is set. Otherwise, returns true if the
     *                    inserted array is not empty (a ``MongoException`` will be
     *                    thrown if the inserted array is empty).
     */
    public function insert($a, $options = 'array()')
    {
    }

    /**
     * Remove records from this collection
     *
     * @param array $criteria
     * @param array $options
     *
     * @return bool|array Returns an array containing the status of the removal if the
     *                    option is set. Otherwise, returns true.
     */
    public function remove($criteria = 'array()', $options = 'array()')
    {
    }

    /**
     * Saves an object to this collection
     *
     * @param array $a
     * @param array $options
     *
     * @return mixed If  was set, returns an array containing the status of the save.
     *               Otherwise, returns a boolean representing if the array was not empty (an empty array will not
     *               be inserted).
     */
    public function save($a, $options = 'array()')
    {
    }

    /**
     * Set the read preference for this collection
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
     * Change slaveOkay setting for this collection
     *
     * @param bool $ok
     *
     * @return bool Returns the former value of slaveOkay for this instance.
     */
    public function setSlaveOkay($ok = 'true')
    {
    }

    /**
     * Converts keys specifying an index to its identifying string
     *
     * @param mixed $keys
     *
     * @return string Returns a string that describes the index.
     */
    public function toIndexString($keys)
    {
    }

    /**
     * Update records based on a given criteria
     *
     * @param array $criteria
     * @param array $new_object
     * @param array $options
     *
     * @return bool|array Returns an array containing the status of the update if the
     *                    option is set. Otherwise, returns true.
     */
    public function update($criteria, $new_object, $options = 'array()')
    {
    }

    /**
     * Validates this collection
     *
     * @param bool $scan_data
     *
     * @return array Returns the databaseaposs evaluation of this object.
     */
    public function validate($scan_data = 'false')
    {
    }
}