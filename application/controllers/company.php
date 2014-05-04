<?php
/*
 * Copyright (C) 2014 Flame.NET Project <http://Flame.NET>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>. 
 *
 */
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Company extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/**
		 *  FlameCMS | Load Models file
		 */
	}

	function termsofuse()
	{
	    /**
		 * FlameCMS | You might want to just autoload these two helpers
		 */
	    $this->load->helper('language');
	    $this->load->helper('url');

	    /**
		 * FlameCMS | Load language file
		 */
	    $this->lang->load('company/termsofuse');

	    /**
		 * FlameCMS | Load view file
		 */
		$this->load->view('company/termsofuse');
	}

	function legal()
	{
	    /**
		 * FlameCMS | You might want to just autoload these two helpers
		 */
	    $this->load->helper('language');
	    $this->load->helper('url');

	    /**
		 * FlameCMS | Load language file
		 */
	    $this->lang->load('company/legal');

	    /**
		 * FlameCMS | Load view file
		 */
		$this->load->view('company/legal');
	}
	
	function privacy()
	{
	    /**
		 * FlameCMS | You might want to just autoload these two helpers
		 */
	    $this->load->helper('language');
	    $this->load->helper('url');

	    /**
		 * FlameCMS | Load language file
		 */
	    $this->lang->load('company/privacy');

	    /**
		 * FlameCMS | Load view file
		 */
		$this->load->view('company/privacy');
	}

	function infringementnotice()
	{
	    /**
		 * FlameCMS | You might want to just autoload these two helpers
		 */
	    $this->load->helper('language');
	    $this->load->helper('url');

	    /**
		 * FlameCMS | Load language file
		 */
	    $this->lang->load('company/infringementnotice');

	    /**
		 * FlameCMS | Load view file
		 */
		$this->load->view('company/infringementnotice');
	}
}

/* End of file account.php */
/* Location: ./application/controllers/account.php */
