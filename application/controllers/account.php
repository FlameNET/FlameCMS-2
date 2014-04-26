<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		/**
		 *  BattleCMS | Load Models file
		 */
		$this->load->model('cms_model');
		$this->load->model('account_model');
	}

	function creation()
	{
		$data['version'] = $this->cms_model->get_version();
		$data['country'] = $this->account_model->get_country();
	    /**
		 * BattleCMS | You might want to just autoload these two helpers
		 */
	    $this->load->helper('language');
	    $this->load->helper('url');

	    /**
		 * BattleCMS | Load language file
		 */
	    $this->lang->load('wow/home');
	    $this->lang->load('account/creation');

	    /**
		 * BattleCMS | Load view file
		 */
		$this->load->view('account/header/header_account', $data);
		$this->load->view('account/creation', $data);
		$this->load->view('account/footer/footer_account', $data);
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */
