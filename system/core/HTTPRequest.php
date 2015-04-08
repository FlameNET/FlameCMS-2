<?php
/**
 * Created by PhpStorm.
 * User: netcho
 * Date: 07.04.15
 * Time: 21:01
 */

class CI_HTTPRequest
{
    private $_controllerName;
    private $_methodName;
    private $_arguments = array();
    private $_relativePath = "";

    public function __construct()
    {
        $uri = explode("/", $_SERVER["REQUEST_URI"]);
        $args = isset($_SERVER["PATH_INFO"]) ? explode("/", $_SERVER["PATH_INFO"]) : array();
        $diff = array_diff($uri, $args);

        if(sizeof($diff) > 0)
        {
            $FCPosition = array_search("index.php", $diff);

            if(!$FCPosition) {
                array_pop($diff);
            }

            $this->_relativePath = implode("/", $diff);
        }

        if(sizeof($args) > 0 && $args[0] != null) {
            $this->_controllerName = $args[0];
        }else {
            //here we have to load the name of the default controller from the config
            $this->_controllerName = "index";
        }

        if(sizeof($args) > 1 && $args[1] != null){
            $this->_methodNameName = $args[1];
        }else {
            $this->_methodName = "index";
        }

        if(sizeof($args) > 2){
            //we have some get args, let's sanitze them and then copy them to the arguments array

            //imagine we're doing a sanitisation here
            $sanitazied = array_splice($args, 2, sizeof($args) - 2);
            $this->_arguments = $sanitazied;
        }

        //let's see if we have any POST data coming
        if(sizeof($_POST) > 0) {
            //sanitize the POST data here
            $this->_arguments = array_merge($this->_arguments, $_POST);
        }
    }

    public function getControllerName()
    {
        return $this->_controllerName;
    }

    public function getMethodName()
    {
        return $this->_methodName;
    }

    public function getArguments()
    {
        return $this->_arguments;
    }

    public function getRelativePath()
    {
        return $this->_relativePath;
    }
}