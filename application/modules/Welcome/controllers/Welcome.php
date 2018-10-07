<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends MX_Controller {

	
		 public function __construct()
  	{
     	parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('package_setup_model');
	}

	public function index()
	{
		$data['package_setup']=$this->package_setup_model->get_package();
		$this->load->view('templates/header');
		$this->load->view('welcome_message',$data);
		$this->load->view('templates/footer');
	}
}
