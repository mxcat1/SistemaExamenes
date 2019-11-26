<?php


class registro extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('parser');
		$this->load->model('RegistroModel');
	}

	public function registroVista(){
		$data['paices']=$this->RegistroModel->paices();
		$this->load->view('registro/nuevoregistro',$data);
	}
	public function nuevoRegistro(){

	}

}
