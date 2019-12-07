<?php


class AuntenticacionModel extends CI_Model
{

	private $table='autenticacion';
	public function __construct()
	{
		parent::__construct();
	}

	public function VerificarNombreUsuario($nombreusuario){
		$this->db->select();
		$this->db->from($this->table);
		$this->db->where('AutenticacionNombreUsuario',$nombreusuario);
		return $this->db->count_all_results();
	}
	public function RegistrarAuntenticacion($datosauten){
		$this->db->insert($this->table,$datosauten);
		return $this->db->insert_id();
	}
}
