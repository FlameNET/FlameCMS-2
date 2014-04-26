<?php
/*
 * Copyright (C) 2014 Luis Cortés <https://qualtiva.com>
 *
 * Do not edit or add to this file if you wish to upgrade Qualtiva to newer
 * versions in the future. If you wish to customize Qualtiva for your
 * needs please refer to http://www.qualtiva.com for more information.
 *
 * @author Luis Cortés <luis@qualtiva.com>
 * @copyright 2013 Qualtiva
 * International Registered Trademark & Property of Qualtiva
 *
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/**
		 *  BattleCMS | Load Models file
		 */
		$this->load->model('cms_model');
		$this->load->model('home_model');
	}

	function index()
	{
		$data['version'] = $this->cms_model->get_version();
		$data['slideshow'] = $this->home_model->get_slideshow();
	    /**
		 * BattleCMS | You might want to just autoload these two helpers
		 */
	    $this->load->helper('language');
	    $this->load->helper('url');

	    /**
		 * BattleCMS | Load language file
		 */
	    $this->lang->load('wow/home');

	    /**
		 * BattleCMS | Load view file
		 */
		$this->load->view('wow/headers/header_home', $data);
		$this->load->view('wow/home', $data);
		$this->load->view('wow/footer/footer_home', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/home.php */
