<?php


class administracion extends CI_Controller
{
	public $porpagina=50;
	public function __construct()
	{
		parent::__construct();
		$this->load->model('AlumnoModel');
		$this->load->model('AdministradorModel');

		$this->form_validation->set_error_delimiters('<small class="text-danger">','</small>');
	}

	public function index(){
		$data['errores']='';
		$this->parser->parse('administracion/login',$data);
	}
	public function login($error=''){
		$data['errores']=$error;
		$this->parser->parse('administracion/login',$data);
	}
	public function Sistema(){
		$data{'NombreUsuario'}='Christian';
		$this->parser->parse('administracion/inicio',$data);
	}
	public function administradores(){
		$this->load->view('administracion/administradores');
	}
	public function alumnos(){
		$totalregistros=$this->AlumnoModel->CantidadAlumnos();
		$config['base_url']=base_url().'administracion/alumnos/';
		$config['uri_segment']=3;
		$config['total_rows']=$totalregistros;
		$config['per_page']=$this->porpagina;

		//styling
		$config['num_tag_open'] = '<li class="paginate_button page-item ">';
		$config['num_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="paginate_button page-item active"><a href="#" class="page-link">';
		$config['cur_tag_close'] = '</a></li>';
		$config['next_link'] = '>>>';
		$config['prev_link'] = '<<<';
		$config['next_tag_open'] = '<li class="paginate_button page-item next">';
		$config['next_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="paginate_button page-item previous">';
		$config['prev_tag_close'] = '</li>';
		$config['first_tag_open'] = '<li>';
		$config['first_tag_close'] = '</li>';
		$config['first_link'] = 'Primero';
		$config['last_tag_open'] = '<li>';
		$config['last_tag_close'] = '</li>';
		$config['last_link'] = 'Ultimo';
		$config['attributes'] = array('class'=>'page-link');

		$this->pagination->initialize($config);

		//define offset
		$page = $this->uri->segment(3);
		$offset = !$page?0:$page;

		$limitadores['inicio']=$offset;
		$limitadores['limite']=$this->porpagina;

		$datosalumnos=$this->AlumnoModel->listaalumnos($limitadores);

		foreach ($datosalumnos as $item){
			if ($item->PersonaSexo=='0'){
				$item->PersonaSexo='Masculino';
			}else{
				$item->PersonaSexo='Femenino';
			}
		}

		$data['alumnos']=$datosalumnos;
		$this->parser->parse('administracion/alumnos',$data);
//		var_dump($datosalumnos);
	}
	public function eliminaralumno($alumno,$usuario,$persona){
		$datoseliminar=array(
			'CodigoAlumno'=>$alumno,
			'CodigoUsuario'=>$usuario,
			'CodigoPersona'=>$persona,
		);
		var_dump($this->AlumnoModel->eliminarEntidad($datoseliminar));
	}
	public function LoginAdministrador(){

		$this->form_validation->set_rules('txtuser', 'Nombre de Usuario', 'trim|required|alpha_numeric',array(
			'required'=>'El {field} no puede estar vacio',
			'alpha_numeric'=>'El {field} solo debe tener letras y numeros',
		));

		$this->form_validation->set_rules('txtcontraseña', 'Contraseña', 'trim|required',array(
			'required'=>'El campo de la {field} no puede estar vacia'
		));
		if ($this->form_validation->run() == TRUE) {
			# code...
			$datoslogin=array(
				'AutenticacionNombreUsuario'=>$this->input->post('txtuser'),
				'AutenticacionContrasena'=>$this->input->post('txtcontraseña')
			);

			$datosadministrador=$this->AdministradorModel->LoginAdministrador($datoslogin);
			if ($datosadministrador){
				$administradordata = array(
					'Administrador'=>$datosadministrador
				);

				$this->session->set_userdata($administradordata);
//				var_dump($datosadministrador);
//				var_dump($this->session->userdata('Administrador'));
				header('location:'.base_url().'administracion/sistema');
			}else{
				$this->login('Usuario No encontrado');
			}

		} else {
			# code...

		}


	}
	public function CerrarSession(){
		$this->session->unset_userdata('Administrador');
		header('location:'.base_url().'administracion/');
	}
}
