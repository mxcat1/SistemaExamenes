<?php


class RegistroModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
//		$this->load->database();
	}
	public function paices(){
		$this->db->select('PaisCodigo,PaisNombre');
		$this->db->from('pais');
		$data=$this->db->get();
		return $data->result();
	}


}
