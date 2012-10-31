<?php

/** @phpstub */
class Stomp
{
    /**
     * Opens a connection
     *
     * @param string $broker
     * @param string $username
     * @param string $password
     * @param array $headers
     * @param string $broker
     * @param string $username
     * @param string $password
     * @param array $headers
     *
     * @return resource
     */
    public function __construct($broker = 'ini_get("stomp.default_broker_uri")', $username = NULL, $password = NULL, $headers = array(), $broker = 'ini_get("stomp.default_broker_uri")', $username = NULL, $password = NULL, $headers = array())
    {
    }

    /**
     * Closes stomp connection
     *
     * @param resource $link
     *
     * @return bool 
     */
    public function __destruct($link)
    {
    }

    /**
     * Rolls back a transaction in progress
     *
     * @param string $transaction_id
     * @param array $headers
     * @param resource $link
     * @param string $transaction_id
     * @param array $headers
     *
     * @return bool 
     */
    public function abort($transaction_id, $headers = array(), $link, $transaction_id, $headers = array())
    {
    }

    /**
     * Acknowledges consumption of a message
     *
     * @param mixed $msg
     * @param array $headers
     * @param resource $link
     * @param mixed $msg
     * @param array $headers
     *
     * @return bool 
     */
    public function ack($msg, $headers = array(), $link, $msg, $headers = array())
    {
    }

    /**
     * Starts a transaction
     *
     * @param string $transaction_id
     * @param array $headers
     * @param resource $link
     * @param string $transaction_id
     * @param array $headers
     *
     * @return bool 
     */
    public function begin($transaction_id, $headers = array(), $link, $transaction_id, $headers = array())
    {
    }

    /**
     * Commits a transaction in progress
     *
     * @param string $transaction_id
     * @param array $headers
     * @param resource $link
     * @param string $transaction_id
     * @param array $headers
     *
     * @return bool 
     */
    public function commit($transaction_id, $headers = array(), $link, $transaction_id, $headers = array())
    {
    }

    /**
     * Gets the last stomp error
     *
     * @param resource $link
     *
     * @return string Returns an error string or false if no error occurred.
     */
    public function error($link)
    {
    }

    /**
     * Gets read timeout
     *
     * @param resource $link
     *
     * @return array Returns an array with 2 elements: sec and usec.
     */
    public function getReadTimeout($link)
    {
    }

    /**
     * Gets the current stomp session ID
     *
     * @param resource $link
     *
     * @return string string session id on success.
     */
    public function getSessionId($link)
    {
    }

    /**
     * Indicates whether or not there is a frame ready to read
     *
     * @param resource $link
     *
     * @return bool Returns true if a frame is ready to read, or false otherwise.
     */
    public function hasFrame($link)
    {
    }

    /**
     * Reads the next frame
     *
     * @param string $class_name
     * @param resource $link
     *
     * @return array
     */
    public function readFrame($class_name = 'stompFrame', $link)
    {
    }

    /**
     * Sends a message
     *
     * @param string $destination
     * @param mixed $msg
     * @param array $headers
     * @param resource $link
     * @param string $destination
     * @param mixed $msg
     * @param array $headers
     *
     * @return bool 
     */
    public function send($destination, $msg, $headers = array(), $link, $destination, $msg, $headers = array())
    {
    }

    /**
     * Sets read timeout
     *
     * @param int $seconds
     * @param int $microseconds
     * @param resource $link
     * @param int $seconds
     * @param int $microseconds
     *
     * @return void
     */
    public function setReadTimeout($seconds, $microseconds = NULL, $link, $seconds, $microseconds = NULL)
    {
    }

    /**
     * Registers to listen to a given destination
     *
     * @param string $destination
     * @param array $headers
     * @param resource $link
     * @param string $destination
     * @param array $headers
     *
     * @return bool 
     */
    public function subscribe($destination, $headers = array(), $link, $destination, $headers = array())
    {
    }

    /**
     * Removes an existing subscription
     *
     * @param string $destination
     * @param array $headers
     * @param resource $link
     * @param string $destination
     * @param array $headers
     *
     * @return bool 
     */
    public function unsubscribe($destination, $headers = array(), $link, $destination, $headers = array())
    {
    }
}