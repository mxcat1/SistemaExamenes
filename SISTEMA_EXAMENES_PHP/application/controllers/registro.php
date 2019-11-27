<?php


class registro extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
//		$this->load->helper('url');
//		$this->load->helper('form');
//		$this->load->library('parser');
		$this->load->model('RegistroModel');
		$this->load->model('AlumnoModel');
		$this->load->model('PersonaModel');
	}

	public function registroVista(){
		$data['errors']='';
		$data['paices']=$this->RegistroModel->paices();
		$this->parser->parse('registro/nuevoregistro',$data);
	}
	public function nuevoRegistro(){
		$datosPersona=array(
			'PersonaCodigo'=>$this->input->post('txtdni'),
			'PersonaNombre'=>$this->input->post('txtnombre'),
			'PersonaApellido'=>$this->input->post('txtapellido'),
			'PersonaCorreo'=>$this->input->post('txtcorreo'),
			'PersonaSexo'=>(($this->input->post('grbsexo')) == 'Masculino'?false :true),
			'PersonaPais'=>$this->input->post('cbpais'),
			'PersonaFechaNacimiento'=>$this->input->post('dtfenac'),
		);
//		var_dump($datosPersona);
		echo $this->PersonaModel->RegistrarPersona($datosPersona);
	}

}
