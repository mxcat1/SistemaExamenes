<?php


class autenticacion extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->library('parser');
	}
	public function login(){
		$this->load->view('autenticacion/login');
	}


}
