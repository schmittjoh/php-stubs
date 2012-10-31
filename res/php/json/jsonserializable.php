<?php

/** @phpstub */
interface JsonSerializable
{
    /**
     * Specify data which should be serialized to JSON
     *
     * @return mixed Returns data which can be serialized by ,
     *               which is a value of any type other than a ``resource``.
     */
    public function jsonSerialize();
}