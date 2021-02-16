<?php

use Fcosrno\Exam\Exam;

defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		$this->load->model("Welcome_model");
		$this->load->helper('url_helper');
		$this->load->helper('form_helper');

	}

	public function index()
	{
		$this->load->view('welcome_message');
		var_dump($this->Welcome_model->datos());
//		echo base_url();
//		echo form_open();
	}
	public function pruebaexam()
	{
		echo form_open();
		$nuevo=new Fcosrno\Exam\Exam();
		$nuevo->ask('hola')->setChoices('1','2','3')->setAnswer('2');
		$nuevo->ask('hola')->setChoices('1','2','3')->setAnswer('2');
		$nuevo->ask('hola')->setChoices('1','2','3')->setAnswer('2');
		$vista=$nuevo->generateHtml();
		echo $vista;


		echo form_submit('enviar','enviar');
		if(!empty($_POST)){
			$mire=array_values($_POST);
			$per=$nuevo->grade($mire);
			echo $per->asPercentage();
			echo '<br>';
			echo $per->asFraction();
			$_POST=null;
		}
	}
	public function hola(){
		echo "Hola";
	}
}
