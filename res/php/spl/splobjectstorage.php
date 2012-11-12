<?php

/** @phpstub */
class SplObjectStorage implements \Countable, \Iterator, \Traversable, \Serializable, \ArrayAccess
{
    /**
     * Adds all objects from another storage
     *
     * @param SplObjectStorage $storage
     *
     * @return void 
     */
    public function addAll($storage)
    {
    }

    /**
     * Adds an object in the storage
     *
     * @param object $object
     * @param mixed $data
     *
     * @return void 
     */
    public function attach($object, $data = NULL)
    {
    }

    /**
     * Checks if the storage contains a specific object
     *
     * @param object $object
     *
     * @return bool Returns true if the ``object`` is in the storage, false otherwise.
     */
    public function contains($object)
    {
    }

    /**
     * Returns the number of objects in the storage
     *
     * @return int The number of objects in the storage.
     */
    public function count()
    {
    }

    /**
     * Returns the current storage entry
     *
     * @return object The ``object`` at the current iterator position.
     */
    public function current()
    {
    }

    /**
     * Removes an ``object`` from the storage
     *
     * @param object $object
     *
     * @return void 
     */
    public function detach($object)
    {
    }

    /**
     * 
       Calculate a unique identifier for the contained objects
      
     *
     * @param object $object
     *
     * @return string A ``string`` with the calculated identifier.
     */
    public function getHash($object)
    {
    }

    /**
     * Returns the data associated with the current iterator entry
     *
     * @return mixed The data associated with the current iterator position.
     */
    public function getInfo()
    {
    }

    /**
     * Returns the index at which the iterator currently is
     *
     * @return int The index corresponding to the position of the iterator.
     */
    public function key()
    {
    }

    /**
     * Move to the next entry
     *
     * @return void 
     */
    public function next()
    {
    }

    /**
     * Checks whether an object exists in the storage
     *
     * @param object $object
     *
     * @return bool Returns true if the ``object`` exists in the storage,
     *              and false otherwise.
     */
    public function offsetExists($object)
    {
    }

    /**
     * Returns the data associated with an ``object``
     *
     * @param object $object
     *
     * @return mixed The data previously associated with the ``object`` in the storage.
     */
    public function offsetGet($object)
    {
    }

    /**
     * Associates data to an object in the storage
     *
     * @param object $object
     * @param mixed $data
     *
     * @return void 
     */
    public function offsetSet($object, $data = NULL)
    {
    }

    /**
     * Removes an object from the storage
     *
     * @param object $object
     *
     * @return void 
     */
    public function offsetUnset($object)
    {
    }

    /**
     * Removes objects contained in another storage from the current storage
     *
     * @param SplObjectStorage $storage
     *
     * @return void 
     */
    public function removeAll($storage)
    {
    }

    /**
     * Removes all objects except for those contained in another storage from the current storage
     *
     * @param SplObjectStorage $storage
     *
     * @return void 
     */
    public function removeAllExcept($storage)
    {
    }

    /**
     * Rewind the iterator to the first storage element
     *
     * @return void 
     */
    public function rewind()
    {
    }

    /**
     * Serializes the storage
     *
     * @return string A string representing the storage.
     */
    public function serialize()
    {
    }

    /**
     * Sets the data associated with the current iterator entry
     *
     * @param mixed $data
     *
     * @return void 
     */
    public function setInfo($data)
    {
    }

    /**
     * Unserializes a storage from its string representation
     *
     * @param string $serialized
     *
     * @return void 
     */
    public function unserialize($serialized)
    {
    }

    /**
     * Returns if the current iterator entry is valid
     *
     * @return bool Returns true if the iterator entry is valid, false otherwise.
     */
    public function valid()
    {
    }
}