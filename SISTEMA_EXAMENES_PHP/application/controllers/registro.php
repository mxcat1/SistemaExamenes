<?php


class registro extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
//		$this->load->helper('url');
//		$this->load->helper('form');
//		$this->load->library('parser');
		$this->load->model('PaicesModel');
		$this->load->model('AlumnoModel');
		$this->load->model('PersonaModel');
		$this->load->model('AuntenticacionModel');
	}

	public function registroVista(){
		$data['errors']='';
		$data['paices']=$this->PaicesModel->find_paices();
		$this->parser->parse('registro/nuevoregistro',$data);
	}
	public function nuevoRegistro(){
		$datosautenticacion=array(
			'Contrato'=>null,
			'AutenticacionNombreUsuario'=>$this->input->post('txtnomusuario'),
			'AutenticacionContrasena'=>$this->input->post('txtpass')
		);
		$datosalumno=array(
			'AlumnoCodigo'=>$this->input->post('txtdni').'EA',
			'PersonaAlumno'=>$this->input->post('txtdni').'EP',
		);
		$datosPersona=array(
			'PersonaCodigo'=>$this->input->post('txtdni').'EP',
			'PersonaNombre'=>$this->input->post('txtnombre'),
			'PersonaApellido'=>$this->input->post('txtapellido'),
			'PersonaCorreo'=>$this->input->post('txtcorreo'),
			'PersonaSexo'=>(($this->input->post('grbsexo')) == 'Masculino'?false :true),
			'PersonaPais'=>$this->input->post('cbpais'),
			'PersonaFechaNacimiento'=>$this->input->post('dtfenac'),
		);
//		var_dump($datosPersona);
//		echo $this->PersonaModel->RegistrarPersona($datosPersona);
		var_dump($datosalumno,$datosPersona,$datosautenticacion);
	}

}
