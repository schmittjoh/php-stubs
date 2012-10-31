<?php

/** @phpstub */
class VarnishStat
{
    /**
     * VarnishStat constructor
     *
     * @param array $args
     */
    public function __construct($args = array())
    {
    }

    /**
     * Get the current varnish instance statistics snapshot
     *
     * @return array Array with the varnish statistic snapshot. The array keys are identical to
     *               that in the varnishstat tool.
     */
    public function getSnapshot()
    {
    }
}