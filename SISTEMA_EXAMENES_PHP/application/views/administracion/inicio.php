<?php

if ($this->session->has_userdata('Administrador')){
	$this->load->view('plantillaAdmin/html');
	$this->load->view('plantillaAdmin/menunav');
	$this->load->view('plantillaAdmin/menulateral');
	$this->load->view('plantillaAdmin/contenidoinicio');
	$this->load->view('plantillaAdmin/footer');
	$this->load->view('plantillaAdmin/htmlfinal');
}else{
	header('location:'.base_url().'administracion/login');
}


?>
