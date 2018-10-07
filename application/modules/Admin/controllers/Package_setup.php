<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include_once('Admin.php');
class Package_setup extends Admin {

	 public function __construct()
  	{
     	parent::__construct();
		$this->load->helper(array('form', 'url'));
		$this->load->library(array('session', 'form_validation'));
		$this->load->model('admin_model');
		$this->load->model('package_setup_model');
		 if (!$this->session->userdata('is_logged_in')) {
            redirect(site_url('admin/user/login'));
        } 
	}

public function index()
	{
		$data['titlename']=$this->admin_model->get_logged_user();
		$this->display('package_setup',$data);
	}

public function add(){
	$data['titlename']=$this->admin_model->get_logged_user();
	$this->form_validation->set_rules('package_name','Package Name', 'required');
	$this->form_validation->set_rules('package_features','Package Features','required');
	$this->form_validation->set_rules('package_price','Package Price', 'required');

	if($this->form_validation->run()===FALSE){		
		$this->display('package_setup',$data);
	}else{
		$this->package_setup_model->add_package();
		$this->display('package_setup',$data);
	}
}

public function view(){
	$data['titlename']=$this->admin_model->get_logged_user();
	$this->display('admin/test',$data);
}	

/* Write Above Here*/
}
