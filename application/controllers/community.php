<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Community extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/**
		 *  BattleCMS | Load Models file
		 */
		$this->load->model('cms_model');
		$this->load->model('community_model');
	}

	function index()
	{
		$data['version'] = $this->cms_model->get_version();
		$data['pve_mode'] = $this->community_model->get_pve_mode();
		$data['pvp_mode'] = $this->community_model->get_pvp_mode();
	    /**
		 * BattleCMS | You might want to just autoload these two helpers
		 */
	    $this->load->helper('language');
	    $this->load->helper('url');

	    /**
		 * BattleCMS | Load language file
		 **/
	    $this->lang->load('wow/home');
	    $this->lang->load('wow/community');

	    /**
		 * BattleCMS | Load view file
		 */
		$this->load->view('wow/headers/header_community', $data);
		$this->load->view('wow/community', $data);
		$this->load->view('wow/footer/footer_home', $data);
	}
}

/* End of file community.php */
/* Location: ./application/controllers/community.php */
