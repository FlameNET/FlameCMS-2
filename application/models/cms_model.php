<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cms_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_version($cms = FALSE)
	{
		if ($cms === FALSE)
		{
			$query = $this->db->get('version');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('version', array('version' => $cms));
		return $query->row_array();
	}
}
