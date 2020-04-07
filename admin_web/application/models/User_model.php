<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
	public $table = 'users';
	public $email = 'email';
	 function __construct()
    {
        parent::__construct();
    }

    public function register($data=array()){
    	$this->db->insert($this->table,$data); 
    	return 1;
    }
    public function check_user($email){
    	$this->db->from($this->table);
    	$this->db->where($this->email,$email);
      	return $this->db->get()->result_array();
    }

    public function get_user_type($email,$pass){
    	$this->db->select('user_type');
    	$this->db->from($this->table);
    	$this->db->where($this->email,$email);
    	$this->db->where('password',$pass);
      	return $this->db->get()->result_array();
    }

}

?>