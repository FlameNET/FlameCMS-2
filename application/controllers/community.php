<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Community extends CI_Controller {
	/*
	 *  BattleCMS | Load Models file
	 **/
	public function __construct()
	{
		parent::__construct();
		$this->load->model('cms_model');
	}

	function index()
	{
		$data['version'] = $this->cms_model->get_version();
	    /*
		 * BattleCMS | You might want to just autoload these two helpers
		 **/
	    $this->load->helper('language');
	    $this->load->helper('url');

	    /*
		 * BattleCMS | Load language file
		 **/
	    $this->lang->load('home');

	    /*
		 * BattleCMS | Load view file
		 **/
		$this->load->view('wow/headers/header_community', $data);
		$this->load->view('wow/community', $data);
		$this->load->view('wow/footer/footer_home', $data);
	}
}

/* End of file home.php */
/* Location: ./application/controllers/welcome.php */