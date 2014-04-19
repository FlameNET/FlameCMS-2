<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Account_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_country($country = FALSE)
	{
		if ($country === FALSE)
		{
			$query = $this->db->get('country');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('country', array('country' => $country));
		return $query->row_array();
	}
}
