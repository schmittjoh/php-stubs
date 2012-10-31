<?php

/** @phpstub */
class mysqli_driver
{
    /** @var int */
    public $report_mode;

    /** @var bool */
    public $reconnect;

    /** @var string */
    public $embedded;

    /** @var string */
    public $driver_version;

    /** @var string */
    public $client_version;

    /** @var string */
    public $client_info;

    /**
     * Stop embedded server
     *
     * @return void
     */
    public function embedded_server_end()
    {
    }

    /**
     * Initialize and start embedded server
     *
     * @param bool $start
     * @param array $arguments
     * @param array $groups
     * @param bool $start
     * @param array $arguments
     * @param array $groups
     *
     * @return bool
     */
    public function embedded_server_start($start, $arguments, $groups, $start, $arguments, $groups)
    {
    }
}