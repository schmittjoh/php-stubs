<?php

/** @phpstub */
class Xcom
{
    public $__debug;

    /**
     * Create a new Xcom object
     *
     * @param string $fabric_url
     * @param string $fabric_token
     * @param string $capability_token
     */
    public function __construct($fabric_url = NULL, $fabric_token = NULL, $capability_token = NULL)
    {
    }

    /**
     * Decodes an avro message
     *
     * @param string $avro_msg
     * @param string $json_schema
     *
     * @return object Returns a  object, or FALSE on failure.
     */
    public function decode($avro_msg, $json_schema)
    {
    }

    /**
     * Encode an avro message
     *
     * @param stdClass $data
     * @param string $avro_schema
     *
     * @return string Returns an avro-encoded string or false on failure.
     */
    public function encode($data, $avro_schema)
    {
    }

    /**
     * Get the debug output
     *
     * @return string Returns a string containing request/response debug information.
     */
    public function getDebugOutput()
    {
    }

    /**
     * Get the last response body
     *
     * @return string Returns a string containing the last response.
     */
    public function getLastResponse()
    {
    }

    /**
     * Gets the last response HTTP information
     *
     * @return array Returns an array containing HTTP response information.
     */
    public function getLastResponseInfo()
    {
    }

    /**
     * Generate an onboarding URL
     *
     * @param string $capability_name
     * @param string $agreement_url
     *
     * @return string Returns the URL, or false on failure.
     */
    public function getOnboardingURL($capability_name, $agreement_url)
    {
    }

    /**
     * Send a message
     *
     * @param string $topic
     * @param mixed $data
     * @param string $json_schema
     * @param array $http_headers
     *
     * @return int Returns the HTTP response code, or false on failure.
     */
    public function send($topic, $data, $json_schema = NULL, $http_headers = array())
    {
    }

    /**
     * Send a message asynchronously
     *
     * @param string $topic
     * @param mixed $data
     * @param string $json_schema
     * @param array $http_headers
     *
     * @return int Returns .
     */
    public function sendAsync($topic, $data, $json_schema = NULL, $http_headers = array())
    {
    }
}