<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home_model extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}
	
	public function get_slideshow($img = FALSE)
	{
		if ($img === FALSE)
		{
			$query = $this->db->get('slideshow');
			return $query->result_array();
		}
		
		$query = $this->db->get_where('slideshow', array('img' => $img));
		return $query->row_array();
	}
}
