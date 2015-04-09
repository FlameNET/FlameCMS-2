<?php
/**
 * Created by PhpStorm.
 * User: netcho
 * Date: 07.04.15
 * Time: 20:29
 */

include_once APPPATH."config/database.php";

class Bootstrapper
{
    private $_request;
    private $_databaseRegistry;

    public function __construct()
    {
        $this->_loadCoreClass("HTTPRequest");
        $this->_loadCoreClass("Controller");
        $this->_loadCoreClass("DatabaseRegistry");
        $this->_autoload();
        $this->_request = new CI_HTTPRequest();
        $this->_databaseRegistry = new DatabaseRegistry($GLOBALS["db"]);
    }

    function __destruct()
    {
        $this->_databaseRegistry->closeConnections();
    }

    public function initialize()
    {
        $this->_databaseRegistry->initialize();
        define("RELPATH", $this->_request->getRelativePath());
        define("BASEURL", "http://".$_SERVER["HTTP_HOST"].RELPATH);
    }

    public function run()
    {
        $ControllerName = ucfirst($this->_request->getControllerName());

        try{
            $this->_loadController($ControllerName);
        } catch (ErrorException $loadError) {
            print $loadError->getMessage();
        }

        $ControllerName = $ControllerName."Controller";
        $Controller = new $ControllerName();
        $MethodName = ucfirst($this->_request->getMethodName())."Action";
        $Controller->setArguments($this->_request->getArguments());
        $Controller->setBootstrapper($this);

        try{
            if(method_exists($Controller, $MethodName)){
                $Controller->$MethodName();
            } else {
                throw new InvalidArgumentException("No such action");
            }
        } catch (InvalidArgumentException $error){
            die($error->getMessage());
        }

        $content = $Controller->render();

        if(!$Controller->hasLayout()) {
            echo $content;
        } else {
            include_once APPPATH."layout/".$Controller->getLayout().".phtml";
        }
    }

    public function getDatabase($name)
    {
        if ($this->_databaseRegistry->databaseExists($name))
            return $this->_databaseRegistry->getDatabase($name);
        else
            throw new ErrorException("The database ".$name." does not exist");
    }

    public function loadView($view, $args = array())
    {
        try {
            if (file_exists(APPPATH."views/".$view.".phtml")) {
                foreach ($args as $name => $value) {
                    $$name = $value;
                }
                include_once APPPATH."views/".$view.".phtml";
            } else {
                throw new InvalidArgumentException("The view ".$view." could not be located");
            }
        } catch (InvalidArgumentException $error) {
            print $error->getMessage();
        }
    }

    private function _loadCoreClass($name)
    {
        if(file_exists(BASEPATH."core/".$name.".php")){
            require_once BASEPATH."core/".$name.".php";
        }else{
            throw new ErrorException("The requested core class ".$name." could not be located.");
        }
    }

    private function _loadController($name)
    {
        if(file_exists(APPPATH."controllers/".$name.".php")){
            require_once APPPATH."controllers/".$name.".php";
        }else{
            throw new ErrorException("The requested controller ".$name." could not be located.");
        }
    }

    private function _autoload()
    {

    }
}