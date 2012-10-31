<?php

/** @phpstub */
class AMQPEnvelope
{
    /**
     * Get the message appid
     *
     * @return string The application id of the message.
     */
    public function getAppId()
    {
    }

    /**
     * Get the message body
     *
     * @return string The contents of the message body.
     */
    public function getBody()
    {
    }

    /**
     * Get the message contentencoding
     *
     * @return string The content encoding of the message.
     */
    public function getContentEncoding()
    {
    }

    /**
     * Get the message contenttype
     *
     * @return string The content type of the message.
     */
    public function getContentType()
    {
    }

    /**
     * Get the message correlation id
     *
     * @return string The correlation id of the message.
     */
    public function getCorrelationId()
    {
    }

    /**
     * Get the message delivery tag
     *
     * @return string The delivery tag of the message.
     */
    public function getDeliveryTag()
    {
    }

    /**
     * Get the message exchange
     *
     * @return string The exchange name on which the message was published.
     */
    public function getExchange()
    {
    }

    /**
     * Get the message expiration
     *
     * @return string The message expiration.
     */
    public function getExpiration()
    {
    }

    /**
     * Get a specific message header
     *
     * @param string $header_key
     *
     * @return string The contents of the specified header or false if not set.
     */
    public function getHeader($header_key)
    {
    }

    /**
     * Get the message headers
     *
     * @return array An array of key value pairs associated with the message.
     */
    public function getHeaders()
    {
    }

    /**
     * Get the message id
     *
     * @return string The message id.
     */
    public function getMessageId()
    {
    }

    /**
     * Get the message priority
     *
     * @return string The message priority.
     */
    public function getPriority()
    {
    }

    /**
     * Get the message replyto
     *
     * @return string The contents of the reply to field.
     */
    public function getReplyTo()
    {
    }

    /**
     * Get the message routing key
     *
     * @return string The message routing key.
     */
    public function getRoutingKey()
    {
    }

    /**
     * Get the message timestamp
     *
     * @return string The message timestamp.
     */
    public function getTimeStamp()
    {
    }

    /**
     * Get the message type
     *
     * @return string The message type.
     */
    public function getType()
    {
    }

    /**
     * Get the message user id
     *
     * @return string The message user id.
     */
    public function getUserId()
    {
    }

    /**
     * Whether this is a redelivery of the message
     *
     * @return bool true if this is a redelivery, false otherwise.
     */
    public function isRedelivery()
    {
    }
}