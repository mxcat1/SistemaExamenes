<?php


class Index extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
//		$this->load->helper('url');
//		$this->load->helper('form');
//		$this->load->library('parser');
	}
	public function index(){
		$this->load->view('index/inicio');
	}
	public function contacto(){
		$this->load->view('index/contacto');
	}
}
