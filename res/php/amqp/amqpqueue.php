<?php

/** @phpstub */
class AMQPQueue
{
    /**
     * Create an instance of an AMQPQueue object
     *
     * @param AMQPChannel $amqp_channel
     */
    public function __construct($amqp_channel)
    {
    }

    /**
     * Acknowledge the receipt of a message
     *
     * @param int $delivery_tag
     * @param int $flags
     *
     * @return bool 
     */
    public function ack($delivery_tag, $flags = 0)
    {
    }

    /**
     * Bind the given queue to a routing key on an exchange.
     *
     * @param string $exchange_name
     * @param string $routing_key
     *
     * @return bool 
     */
    public function bind($exchange_name, $routing_key)
    {
    }

    /**
     * Cancel a queue binding.
     *
     * @param string $consumer_tag
     *
     * @return bool 
     */
    public function cancel($consumer_tag = '')
    {
    }

    /**
     * Consume messages from a queue
     *
     * @param callable $callback
     * @param int $flags
     *
     * @return void
     */
    public function consume($callback, $flags = 0)
    {
    }

    /**
     * Declare a new queue
     *
     * @return int Returns the message count.
     */
    public function declare()
    {
    }

    /**
     * Delete a queue and its contents.
     *
     * @return bool 
     */
    public function delete()
    {
    }

    /**
     * Retrieve the next message from the queue.
     *
     * @param int $flags
     *
     * @return mixed An instance of ``AMQPEnvelope`` representing the message pulled from the queue, or false.
     */
    public function get($flags = NULL)
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
     * Get all arguments set on the given queue
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
     * Mark a message as explicitly not acknowledged.
     *
     * @param string $delivery_tag
     * @param string $flags
     *
     * @return void 
     */
    public function nack($delivery_tag, $flags = '')
    {
    }

    /**
     * Purge the contents of a queue
     *
     * @return bool 
     */
    public function purge()
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
     * Set all arguments on the queue
     *
     * @param array $arguments
     *
     * @return void 
     */
    public function setArguments($arguments)
    {
    }

    /**
     * Set the queue flags
     *
     * @param int $flags
     *
     * @return void 
     */
    public function setFlags($flags)
    {
    }

    /**
     * Set the queue name
     *
     * @param string $queue_name
     *
     * @return void 
     */
    public function setName($queue_name)
    {
    }

    /**
     * Unbind the queue from a routing key.
     *
     * @param string $exchange_name
     * @param string $routing_key
     *
     * @return bool 
     */
    public function unbind($exchange_name, $routing_key)
    {
    }
}