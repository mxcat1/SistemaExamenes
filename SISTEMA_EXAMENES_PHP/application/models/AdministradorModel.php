<?php


class AdministradorModel extends CI_Model
{
	public $table='administrador';
	public $idtable='AdministradorCodigo';
	public function __construct()
	{
		parent::__construct();
	}

	public function LoginAdministrador($datoslogin){
		$on1='persona.PersonaAutenticacion = autenticacion.AutenticacionCodigo';
		$on2='administrador.PersonaAdministrador = persona.PersonaCodigo';
		$this->db->select();
		$this->db->from('persona');
		$this->db->join('autenticacion',$on1);
		$this->db->join($this->table,$on2);
		$this->db->where($datoslogin);
		$resultado=$this->db->get();
		if($resultado->num_rows()>0){
			return $resultado->result();
		}else{
			return false;
		}
	}

}
