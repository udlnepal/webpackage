<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Package extends MX_Controller {

	
	public function __construct()
  	{
     	parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('package_setup_model');
		//$this->load->model('package_model');
	}

	public function index()
	{
		if(empty($this->uri->segment(3))){
			redirect('welcome');
		}else{
		$this->load->view('welcome/templates/header');
		$this->load->view('add');
		$this->load->view('welcome/templates/footer');
		}
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

public function confirm_book(){

	$data['test']="testing";
	$this->form_validation->set_rules('name','Name','required');
	$this->form_validation->set_rules('phone','Phone','required');
	$this->form_validation->set_rules('requirements','Requirements','required');
	$data=array(
    		'user_book_id'=>$this->input->post('pack_id'),
    	);

	if($this->form_validation->run()===FALSE){	
		//$this->session->set_flashdata('Error','Error Occured');
		$data['package_setup']=$this->package_setup_model->get_package();
		$this->load->view('welcome/templates/header');
		$this->load->view('add',$data);
		$this->load->view('welcome/templates/footer');
	}else{
		$this->package_model->book_package();
		
		redirect('welcome');
	}
}


/*write above here*/
}

?>