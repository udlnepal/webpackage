<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends MX_Controller {

	
		 public function __construct()
  	{
     	parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('package_setup_model');
	}

	public function index()
	{
		$this->load->view('welcome/templates/header');
		$this->load->view('add');
		$this->load->view('welcome/templates/footer');
		
	}
	public function book(){
	$book_id=$this->uri->segment(3);
	$data=array(
		'user_book_id'=>$book_id,
	);
	$data['package_setup']=$this->package_setup_model->get_package();
	$this->load->view('welcome/templates/header');
	$this->load->view('add',$data);
	$this->load->view('welcome/templates/footer');

	}


/*write above here*/
}

?>