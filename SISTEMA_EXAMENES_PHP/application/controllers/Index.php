<?php


class Index extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('form');
	}
	public function index(){
		$this->load->view('plantilla/template');
	}
	public function contacto(){
		$this->load->view('plantilla/contacto');
	}
}
