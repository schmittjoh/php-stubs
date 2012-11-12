<?php

/** @phpstub */
class AMQPExchange
{
    /**
     * Create an instance of AMQPExchange
     *
     * @param AMQPChannel $amqp_channel
     */
    public function __construct($amqp_channel)
    {
    }

    /**
     * Bind to another exchange
     *
     * @param string $destination_exchange_name
     * @param string $source_exchange_name
     * @param string $routing_key
     *
     * @return bool 
     */
    public function bind($destination_exchange_name, $source_exchange_name, $routing_key)
    {
    }

    /**
     * Declare a new exchange on the broker.
     *
     * @return int 
     */
    public function declare()
    {
    }

    /**
     * Delete the exchange from the broker.
     *
     * @param int $flags
     *
     * @return bool 
     */
    public function delete($flags = false)
    {
    }

    /**
     * Get the argument associated with the given key
     *
     * @param string $key
     *
     * @return mixed The ``string`` or ``integer`` value associated with the given key, or false if the key is not set.
     */
    public function getArgument($key)
    {
    }

    /**
     * Get all arguments set on the given exchange
     *
     * @return array An ``array`` containing all of the set key/value pairs.
     */
    public function getArguments()
    {
    }

    /**
     * Get the flag bitmask
     *
     * @return int An ``integer`` bitmask of all the flags currently set on this exchange object.
     */
    public function getFlags()
    {
    }

    /**
     * Get the configured name
     *
     * @return string The configured name as a ``string``.
     */
    public function getName()
    {
    }

    /**
     * Get the configured type
     *
     * @return string The configured type as a ``string``.
     */
    public function getType()
    {
    }

    /**
     * Publish a message to an exchange.
     *
     * @param string $message
     * @param string $routing_key
     * @param int $flags
     * @param array $attributes
     *
     * @return bool 
     */
    public function publish($message, $routing_key, $flags = false, $attributes = array())
    {
    }

    /**
     * Set the value for the given key
     *
     * @param string $key
     * @param mixed $value
     *
     * @return void 
     */
    public function setArgument($key, $value)
    {
    }

    /**
     * Set all arguments on the exchange
     *
     * @param array $arguments
     *
     * @return void 
     */
    public function setArguments($arguments)
    {
    }

    /**
     * Set the flags on an exchange
     *
     * @param int $flags
     *
     * @return void 
     */
    public function setFlags($flags)
    {
    }

    /**
     * Set the name of the exchange
     *
     * @param string $exchange_name
     *
     * @return void 
     */
    public function setName($exchange_name)
    {
    }

    /**
     * Set the type of the exchange
     *
     * @param string $exchange_type
     *
     * @return string 
     */
    public function setType($exchange_type)
    {
    }
}