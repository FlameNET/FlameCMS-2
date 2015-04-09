<?php
/**
 * Created by PhpStorm.
 * User: netcho
 * Date: 09.04.15
 * Time: 13:32
 */

include_once BASEPATH."database/DB_driver.php";
include_once BASEPATH."database/DB_active_rec.php";
include_once BASEPATH."database/DB_forge.php";
include_once BASEPATH."database/DB_utility.php";

class DatabaseRegistry
{
    private $_drivers;

    public function __construct($dbSettings)
    {
        foreach ($dbSettings as $name => $dsn)
        {
            include_once BASEPATH."database/drivers/".$dsn["dbdriver"]."/".$dsn["dbdriver"]."_driver.php";
            include_once BASEPATH."database/drivers/".$dsn["dbdriver"]."/".$dsn["dbdriver"]."_forge.php";
            include_once BASEPATH."database/drivers/".$dsn["dbdriver"]."/".$dsn["dbdriver"]."_utility.php";
            $ClassName = "CI_DB_".$dsn["dbdriver"]."_driver";
            $this->_drivers[$name] = new $ClassName($dsn);
        }
    }

    public function initialize()
    {
        foreach($this->_drivers as $driver)
        {
            $driver->initialize();
        }
    }

    public function closeConnections()
    {
        foreach($this->_drivers as $driver)
        {
            $driver->close();
        }
    }

    public function databaseExists($name)
    {
        return isset($this->_drivers[$name]);
    }

    public function getDatabase($name)
    {
        return $this->_drivers[$name];
    }
}