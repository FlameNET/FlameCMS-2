<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Game extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/**
		 *  BattleCMS | Load Models file
		 */
		$this->load->model('cms_model');
	}

	function index()
	{
		$data['version'] = $this->cms_model->get_version();
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
		$this->load->view('wow/headers/header_guide_game', $data);
		$this->load->view('wow/home', $data);
		$this->load->view('wow/footer/footer_home', $data);
	}
}

/* End of file game.php */
/* Location: ./application/controllers/game.php */
