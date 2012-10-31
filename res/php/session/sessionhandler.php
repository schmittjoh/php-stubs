<?php

/** @phpstub */
class SessionHandler implements \SessionHandlerInterface
{
    /**
     * Close the session
     *
     * @return bool 
     */
    public function close()
    {
    }

    /**
     * Destroy a session
     *
     * @param string $session_id
     *
     * @return bool 
     */
    public function destroy($session_id)
    {
    }

    /**
     * Cleanup old sessions
     *
     * @param int $maxlifetime
     *
     * @return bool 
     */
    public function gc($maxlifetime)
    {
    }

    /**
     * Initialize session
     *
     * @param string $save_path
     * @param string $session_id
     *
     * @return bool 
     */
    public function open($save_path, $session_id)
    {
    }

    /**
     * Read session data
     *
     * @param string $session_id
     *
     * @return string Returns an encoded string of the read data. If nothing was read, it must return an empty string. Note this value is returned internally to PHP for processing.
     */
    public function read($session_id)
    {
    }

    /**
     * Write session data
     *
     * @param string $session_id
     * @param string $session_data
     *
     * @return bool 
     */
    public function write($session_id, $session_data)
    {
    }
}