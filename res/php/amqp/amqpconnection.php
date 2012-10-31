<?php

/** @phpstub */
class AMQPConnection
{
    /**
     * Create an instance of AMQPConnection
     *
     * @param array $credentials
     */
    public function __construct($credentials = 'array()')
    {
    }

    /**
     * Establish a connection with the AMQP broker.
     *
     * @return bool 
     */
    public function connect()
    {
    }

    /**
     * Closes the connection with the AMQP broker.
     *
     * @return bool Returns true if connection was successfully closed, false otherwise.
     */
    public function disconnect()
    {
    }

    /**
     * Get the configured host
     *
     * @return string The configured host as a string.
     */
    public function getHost()
    {
    }

    /**
     * Get the configured login
     *
     * @return string The configured login as a string.
     */
    public function getLogin()
    {
    }

    /**
     * Get the configured password
     *
     * @return string The configured password as a string.
     */
    public function getPassword()
    {
    }

    /**
     * Get the configured port
     *
     * @return int The configured port as an integer.
     */
    public function getPort()
    {
    }

    /**
     * Get the configured vhost
     *
     * @return string The configured virtual host as a string.
     */
    public function getVhost()
    {
    }

    /**
     * Determine if the AMQPConnection object is connected to the broker.
     *
     * @return bool Returns ``true`` if connected,  otherwise
     */
    public function isConnected()
    {
    }

    /**
     * Closes any open connection and creates a new connection with the AMQP broker.
     *
     * @return bool 
     */
    public function reconnect()
    {
    }

    /**
     * Set the amqp host.
     *
     * @param string $host
     *
     * @return bool 
     */
    public function setHost($host)
    {
    }

    /**
     * Set the login.
     *
     * @param string $login
     *
     * @return bool 
     */
    public function setLogin($login)
    {
    }

    /**
     * Set the password.
     *
     * @param string $password
     *
     * @return bool 
     */
    public function setPassword($password)
    {
    }

    /**
     * Set the port.
     *
     * @param int $port
     *
     * @return bool 
     */
    public function setPort($port)
    {
    }

    /**
     * Set the amqp virtual host
     *
     * @param string $vhost
     *
     * @return bool 
     */
    public function setVhost($vhost)
    {
    }
}