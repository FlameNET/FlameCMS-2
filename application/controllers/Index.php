<?php
/**
 * Created by PhpStorm.
 * User: netcho
 * Date: 08.04.15
 * Time: 15:31
 */

class IndexController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct("index");
    }

    public function IndexAction()
    {
        $newsModel = $this->bootstrap->loadModel("news");
        $newsModel->getNews();
        $this->bootstrap->loadView("index");
    }
}