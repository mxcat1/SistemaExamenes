<?php


class AlumnoModel extends CI_Model
{
	private $table='alumno';
	private $idtable='AlumnoCodigo';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PersonaModel');
		$this->load->model('AuntenticacionModel');
	}
	public function RegistrarAlumno($datosalum){
		return $this->db->insert($this->table,$datosalum);
	}



}
