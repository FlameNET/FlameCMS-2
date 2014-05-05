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

class Community_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_pve_mode($cms = FALSE)
	{
		if ($cms === FALSE)
		{
			$query = $this->db->get('pve_mode');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('pve_mode', array('pve_mode' => $cms));
		return $query->row_array();
	}

	public function get_pvp_mode($cms = FALSE)
	{
		if ($cms === FALSE)
		{
			$query = $this->db->get('pvp_mode');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('pvp_mode', array('pvp_mode' => $cms));
		return $query->row_array();
	}
}
