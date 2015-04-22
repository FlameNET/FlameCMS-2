<?php
/**
 * Created by PhpStorm.
 * User: netcho
 * Date: 22.04.15
 * Time: 17:37
 */

class CI_Session
{
    public function __construct()
    {
        session_start();
    }

    public function __destruct()
    {
        session_write_close();
    }

    public function write($name, $data)
    {
        $_SESSION[$name] = $data;
    }

    public function read($name)
    {
        if(isset($_SESSION) and isset($_SESSION[$name]))
            return $_SESSION[$name];
        else
            return null;
    }
}