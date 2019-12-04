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

		$this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');
	}

	public function registroVista(){
		$data['errors']='';
		$data['paices']=$this->RegistroModel->paices();
		$this->parser->parse('registro/nuevoregistro',$data);
	}
	public function nuevoRegistro(){

		$this->form_validation->set_rules('txtdni', 'DNI', 'numeric|required|min_length[8]|max_length[8]',array(
			'required'=>'El campo %s es requerido obligatoriamente',
			'numeric' =>'El campo %s solo es de numeros',
			'min_length' =>'El campo {field} solo puede tener {param} caracteres numericos como minimo',
			'max_length' =>'El campo {field} solo puede tener {param} caracteres numericos como maximo'
		));
		$this->form_validation->set_rules('txtnombre', 'Nombres', 'trim|alpha_numeric_spaces|required',array(
			'required'=>'El campo {field} es requerido obligatoriamente',
			'alpha_numeric_spaces' =>'El campo {field} solo es de caracteres alfabeticos',
		));
		$this->form_validation->set_rules('txtapellido', 'Apellidos', 'trim|alpha_numeric_spaces|required',array(
			'required'=>'El campo {field} es requerido obligatoriamente',
			'alpha_numeric_spaces' =>'El campo {field} solo es de caracteres alfabeticos',
		));
		$this->form_validation->set_rules('txtcorreo', 'Correo', 'trim|valid_email|required',array(
			'required'=>'El campo {field} es requerido obligatoriamente',
			'valid_email' =>'El campo {field} debe ser un correo valido',
		));
		$this->form_validation->set_rules('grbsexo', 'Sexo', 'required',array(
			'required'=>'El campo {field} es requerido obligatoriamente',
		));
		$this->form_validation->set_rules('cbpais', 'Pais', 'trim|required',array(
			'required'=>'El campo {field} es requerido obligatoriamente',
		));
		$this->form_validation->set_rules('dtfenac', 'Fecha de Nacimineto', 'trim|required',array(
			'required'=>'El campo {field} es requerido obligatoriamente',
		));
		$this->form_validation->set_rules('txtnomusuario', 'Nombre Usuario', 'trim|required|is_unique[autenticacion.AutenticacionNombreUsuario]',array(
			'required'=>'El campo {field} es requerido obligatoriamente',
			'is_unique'=>'El {field} ya esta en uso',
		));
		$this->form_validation->set_rules('txtpass', 'Contraseña', 'trim|required',array(
			'required'=>'El campo {field} es requerido obligatoriamente',
		));
		$this->form_validation->set_rules('txtveripass', 'Confirmar Contraseña', 'trim|required|matches[txtpass]',array(
			'required'=>'El campo {field} es requerido obligatoriamente',
			'matches'=>'La Contraseña no son iguales',
		));


		$datosPersona=array(
			'PersonaCodigo'=>$this->input->post('txtdni'),
			'PersonaNombre'=>$this->input->post('txtnombre'),
			'PersonaApellido'=>$this->input->post('txtapellido'),
			'PersonaCorreo'=>$this->input->post('txtcorreo'),
			'PersonaSexo'=>(($this->input->post('grbsexo')) == 'Masculino'?false :true),
			'PersonaPais'=>$this->input->post('cbpais'),
			'PersonaFechaNacimiento'=>$this->input->post('dtfenac'),
		);
		if ($this->form_validation->run() == FALSE) {
			# code...
			$this->registroVista();
		} else {
			# code...
			echo 'Correcto';
			echo $this->PersonaModel->RegistrarPersona($datosPersona);
		}
//		var_dump($datosPersona);

	}

}
