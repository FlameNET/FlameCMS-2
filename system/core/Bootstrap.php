<?php
/**
 * Created by PhpStorm.
 * User: netcho
 * Date: 07.04.15
 * Time: 20:29
 */

class Bootstrapper
{
    private $_request;

    public function __construct()
    {
        $this->_loadCoreClass("Controller");
        $this->_loadCoreClass("HTTPRequest");
        $this->_loadCoreClass("HTTPResponse");
    }

    function __destruct()
    {
        //delete what was initialized
    }

    public function initialize()
    {
        $this->_request = new CI_HTTPRequest();
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
        $Controller->setArguments($this->_request->getArguements);

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

        //$response = new CI_HTTPResponse();

        if(!$Controller->hasLayout()) {
            echo $content;
        } else {
            include_once APPPATH."layout/".$Controller->getLayout().".phtml";
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
}