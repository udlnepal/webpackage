<?php
class Admin_model extends CI_Model {
 
    public function __construct()
    {
        $this->load->database();
    }

public function get_logged_user(){
    $this->db->select('firstname');
    $this->db->from('user');
    $this->db->where('email', $this->session->userdata('email'));
    $query=$this->db->get()->row();
    $data= $query->firstname;
    return $data;
}


}