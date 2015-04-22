<?php
/**
 * Created by PhpStorm.
 * User: netcho
 * Date: 07.04.15
 * Time: 20:29
 */

include_once APPPATH."config/config.php";
include_once APPPATH."config/database.php";

class Bootstrapper
{
    private $_request;
    private $_databaseRegistry;
    private $_libraries;

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
        $Controller->postInitialize();

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

                $language = $this->getLaguage();

                include_once APPPATH."views/".$view.".phtml";
            } else {
                throw new InvalidArgumentException("The view ".$view." could not be located");
            }
        } catch (InvalidArgumentException $error) {
            print $error->getMessage();
        }
    }

    public function loadModel($name)
    {
        $this->_loadCoreClass("Model");
        $modelName = ucfirst($name)."Model";

        if(file_exists(APPPATH."models/".$modelName.".php")){
            require_once APPPATH."models/".$modelName.".php";
        }else{
            throw new ErrorException("The requested model ".$name." could not be located.");
        }

        $model = new $modelName();
        $model->setDriver($this->_databaseRegistry->getDatabase(
            $this->_databaseRegistry->getDatabaseNameForTable($model->getTableName())));
        return $model;
    }

    public function getLibrary($name)
    {
        if(isset($this->_libraries[$name]))
            return $this->_libraries[$name];
        else
            return null;
    }

    public function getLanguageTag()
    {
        $session = $this->getLibrary("Session");
        $languageTag = $session->read("LanguageTag");
        if($languageTag != null)
            return $languageTag;
        else
            return "english";
    }

    public function setLanguageTag($tag)
    {
        $session = $this->getLibrary("Session");
        $session->write("LanguageTag", $tag);
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
        include_once APPPATH."config/autoload.php";
        foreach ($GLOBALS["autoload"]["libraries"] as $library)
        {
            include_once BASEPATH."core/".$library.".php";
            $ClassName = "CI_".$library;
            $this->_libraries[$ClassName] = new $ClassName();
        }
    }

    private function getLaguage()
    {
        include_once BASEPATH."core/Language.php";
        $tag = $this->getLanguageTag();

        if(file_exists(APPPATH."language/".$tag.".php")) {
            $languageName = "CI_".ucfirst($tag)."_Language";
            $laguage = new $languageName();
            $laguage->loadMarkers();
            return $laguage;
        } else {
            return null;
        }
    }
}