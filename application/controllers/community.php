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

class Community extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		/**
		 *  FlameCMS | Load Models file
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
		 * FlameCMS | You might want to just autoload these two helpers
		 */
	    $this->load->helper('language');
	    $this->load->helper('url');

	    /**
		 * FlameCMS | Load language file
		 **/
	    $this->lang->load('wow/home');
	    $this->lang->load('wow/community');

	    /**
		 * FlameCMS | Load view file
		 */
		$this->load->view('wow/headers/header_community', $data);
		$this->load->view('wow/community', $data);
		$this->load->view('wow/footer/footer_home', $data);
	}
}

/* End of file community.php */
/* Location: ./application/controllers/community.php */
