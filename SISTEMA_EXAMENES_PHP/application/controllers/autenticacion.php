<?php


class autenticacion extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
//		$this->load->helper('url');
//		$this->load->helper('form');
//		$this->load->library('parser');
		$this->load->model('AuntenticacionModel');
		$this->load->model('AlumnoModel');

		$this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');
	}
	public function index(){
		$this->load->view('autenticacion/login');
	}
	public function loginVista(){
		$this->load->view('autenticacion/login');
	}
	public function loginAdmin(){
		$this->load->view('autenticacion/loginAdmin');
	}
	public function IncioSession(){

		$this->form_validation->set_rules('txtnomusu', 'Nombre de Usuario', 'trim|required|min_length[10]|max_length[100]|alpha_numeric',array(
			'required'=>'El {field} no puede estar vacio',
			'min_length'=>'El {field} debe de ser de {param} caractares como minimo',
			'max_length'=>'El {field} debe de ser de {param} caractares como maximo',
			'alpha_numeric'=>'El {field} solo debe tener letras y numeros',
		));

		$this->form_validation->set_rules('passcontraseña', 'Contraseña', 'trim|required',array(
			'required'=>'El campo de la {field} no puede estar vacia'
		));

		if ($this->form_validation->run() == TRUE) {
			# code...
			$datoslogin=array(
				'AutenticacionNombreUsuario'=>$this->input->post('txtnomusu'),
				'AutenticacionContrasena'=>$this->input->post('passcontraseña')
			);
			var_dump($this->AlumnoModel->LoginAlumno($datoslogin));
		} else {
			# code...
			$this->loginVista();
		}



	}


}
