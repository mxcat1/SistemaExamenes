<?php


class PaicesModel extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AlumnoModel');
//		$this->load->database();
	}
	public function find_paices(){
		$this->db->select('PaisCodigo,PaisNombre');
		$this->db->from('pais');
		$data=$this->db->get();
		return $data->result();
	}


}
