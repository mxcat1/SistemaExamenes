<?php


class PersonaModel extends CI_Model
{
	private $table='persona';
	private $idtable='PersonaCodigo';
	public function __construct()
	{
		parent::__construct();
	}

	public function RegistrarPersona($datospersona){
		return $this->db->insert($this->table,$datospersona);
	}

}
