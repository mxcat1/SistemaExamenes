<?php


class AlumnoModel extends CI_Model
{
	public $table='alumno';
	public $idtable='AlumnoCodigo';

	public function __construct()
	{
		parent::__construct();
		$this->load->model('PersonaModel');
		$this->load->model('AuntenticacionModel');
	}
	public function RegistrarAlumno($datosalum){
		return $this->db->insert($this->table,$datosalum);
	}
	public function LoginAlumno($datoslogin){
		$on1='persona.PersonaAutenticacion = autenticacion.AutenticacionCodigo';
		$on2='alumno.PersonaAlumno = persona.PersonaCodigo';
		$this->db->select();
		$this->db->from('autenticacion');
		$this->db->join('persona',$on1);
		$this->db->join($this->table,$on2);
		$this->db->where($datoslogin);
		$resultado=$this->db->get();
		if($resultado->num_rows()>0){
			return $resultado->result();
		}else{
			return false;
		}
	}
	public function listaalumnos($limitadores=array()){
		$on1='persona.PersonaAutenticacion = autenticacion.AutenticacionCodigo';
		$on2='alumno.PersonaAlumno = persona.PersonaCodigo';
		$on3='persona.PersonaPais = pais.PaisCodigo';
		$this->db->select();
		$this->db->from('autenticacion');
		$this->db->join('persona',$on1);
		$this->db->join('pais',$on3);
		$this->db->join($this->table,$on2);
		$this->db->order_by('PersonaCodigo','asc');
		if (array_key_exists("inicio",$limitadores) && array_key_exists("limite",$limitadores)){
			$this->db->limit($limitadores['limite'],$limitadores['inicio']);
		}else{
			$this->db->limit($limitadores['limite']);
		}
		$dataalumnos=$this->db->get();
		return $dataalumnos->result();
	}
	public function CantidadAlumnos(){
		$this->db->select();
		$this->db->from($this->table);
		$gets=$this->db->get();
		return $gets->num_rows();
	}
	public function eliminarEntidad($datosaeliminar){
		//Hay un error pero es por que genere mal la data
		//el segundo error es con las tablas de examenes q tiene relacion con alumno
		//en el script es recomendable cambiar a que las claves foraneas sean en cascada o not null
		//como nota final la funcion eliminar la saque de nucle del codeginiter exactamente
		//en el core y el archivo model
		$verificar['alumno'] = $this->eliminar($this->table,$this->idtable,$datosaeliminar['CodigoAlumno']);
		$verificar['persona']=$this->PersonaModel->eliminar($this->PersonaModel->table,$this->PersonaModel->idtable,$datosaeliminar['CodigoPersona']);
		$verificar['usuario']=$this->AuntenticacionModel->eliminar($this->AuntenticacionModel->table,$this->AuntenticacionModel->idtable,$datosaeliminar['CodigoUsuario']);
		return $verificar;
	}



}
