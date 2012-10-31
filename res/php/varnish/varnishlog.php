<?php

/** @phpstub */
class VarnishLog
{
    const TAG_Backend = 12;
    const TAG_Backend_health = 49;
    const TAG_BackendClose = 10;
    const TAG_BackendOpen = 7;
    const TAG_BackendReuse = 9;
    const TAG_BackendXID = 8;
    const TAG_CLI = 2;
    const TAG_Debug = 0;
    const TAG_Error = 1;
    const TAG_ESI_xmlerror = 47;
    const TAG_ExpBan = 44;
    const TAG_ExpKill = 45;
    const TAG_Fetch_Body = 35;
    const TAG_FetchError = 14;
    const TAG_Gzip = 51;
    const TAG_Hash = 48;
    const TAG_Hit = 42;
    const TAG_HitPass = 43;
    const TAG_HttpGarbage = 11;
    const TAG_Length = 13;
    const TAG_LostHeader = 33;
    const TAG_ObjHeader = 32;
    const TAG_ObjProtocol = 31;
    const TAG_ObjRequest = 27;
    const TAG_ObjResponse = 28;
    const TAG_ObjStatus = 29;
    const TAG_ObjURL = 30;
    const TAG_ReqEnd = 4;
    const TAG_ReqStart = 41;
    const TAG_RxHeader = 20;
    const TAG_RxProtocol = 19;
    const TAG_RxRequest = 15;
    const TAG_RxResponse = 16;
    const TAG_RxStatus = 17;
    const TAG_RxURL = 18;
    const TAG_SessionClose = 6;
    const TAG_SessionOpen = 5;
    const TAG_StatSess = 3;
    const TAG_TTL = 34;
    const TAG_TxHeader = 26;
    const TAG_TxProtocol = 25;
    const TAG_TxRequest = 21;
    const TAG_TxResponse = 22;
    const TAG_TxStatus = 23;
    const TAG_TxURL = 24;
    const TAG_VCL_acl = 36;
    const TAG_VCL_call = 37;
    const TAG_VCL_error = 40;
    const TAG_VCL_Log = 50;
    const TAG_VCL_return = 39;
    const TAG_VCL_trace = 38;
    const TAG_WorkThread = 46;

    /**
     * Varnishlog constructor
     *
     * @param array $args
     */
    public function __construct($args = array())
    {
    }

    /**
     * Get next log line
     *
     * @return array Returns an array with the log line data.
     */
    public function getLine()
    {
    }

    /**
     * Get the log tag string representation by its index
     *
     * @param int $index
     *
     * @return string Returns the log tag name as string.
     */
    public function getTagName($index)
    {
    }
}