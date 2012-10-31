<?php

/** @phpstub */
class AMQPChannel
{
    /**
     * Create an instance of an AMQPChannel object
     *
     * @param AMQPConnection $amqp_connection
     */
    public function __construct($amqp_connection)
    {
    }

    /**
     * Commit a pending transaction
     *
     * @return void 
     */
    public function commitTransaction()
    {
    }

    /**
     * Check the channel connection
     *
     * @return void 
     */
    public function isConnected()
    {
    }

    /**
     * Set the Quality Of Service settings for the given channel
     *
     * @param int $size
     * @param int $count
     *
     * @return void 
     */
    public function qos($size, $count)
    {
    }

    /**
     * Rollback a transaction
     *
     * @return void 
     */
    public function rollbackTransaction()
    {
    }

    /**
     * Set the number of messages to prefetch from the broker
     *
     * @param int $count
     *
     * @return void 
     */
    public function setPrefetchCount($count)
    {
    }

    /**
     * Set the window size to prefetch from the broker
     *
     * @param int $size
     *
     * @return void 
     */
    public function setPrefetchSize($size)
    {
    }

    /**
     * Start a transaction
     *
     * @return void 
     */
    public function startTransaction()
    {
    }
}