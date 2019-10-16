<?php


class Welcome_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}
	public function datos(){
		$datosa=$this->db->query('select * from persona;');
		return $datosa->result_array();
	}
}
