<?php
/**
 * Created by PhpStorm.
 * User: netcho
 * Date: 08.04.15
 * Time: 15:16
 */

class CI_HTTPResponse
{
    public function __construct()
    {
        ob_start();
    }

    public function __destruct()
    {
        ob_end_flush();
    }

    public function add($data)
    {
        echo $data;
    }
}