<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
	 public function __construct() {
	 	parent::__construct();
	 	$this->load->library('session');
	 	$this->load->database();
	 	$this->load->library('session');
	 	$this->load->model('User_model');
	 	$this->load->library(array('form_validation'));
	 }

	public function index()
	{
		$this->load->view('header');
		$this->load->view('register');
		$this->load->view('footer');
	}
	public function check_user(){
		$email = $this->input->post('email');
		$passwd = $this->input->post('pass');
	}
	// Registration form
	public function signup(){
		$data = array(
			'change' => 3
		);
		$this->load->view('template',$data);
	}

	// load login page
	public function login(){
		$data = array(
			'change' => 1
		);
		$this->load->view('template',$data);
	}

	public function forgot_password(){
		$data = array(
			'change' => 2
		);
		$this->load->view('template',$data);
	}

	public function reset_password(){
		$data = array(
			'change' => 4
		);
		$this->load->view('template',$data);
	}

	// Validate user account
	public function validate_user(){
		$this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run()== FALSE) {
			$_SESSION['user_login'] = "User account doesn't Exist";
            $this->login();
        }else{
        	$user = $this->User_model->get_user_type($this->input->post('email'), md5($this->input->post('password')));
        	foreach ($user as $key) {
        		$type = $key;
        	}
        	$data['change'] = 3;
        	$_SESSION['active'] = $type['user_type'];
        	
        	$this->load->view('template',$data);
        }
		
	}
	// Register user
	public function registration(){
		$data_to_insert = array(
			'fname' => $this->input->post('fname'),
			'lname' => $this->input->post('lname'),
			'email' => $this->input->post('email'), 
			'password' => md5($this->input->post('password')),
			'location' => $this->input->post('location'),
			'user_type' => $this->input->post('user_type')
		);
		if($this->User_model->check_user($this->input->post('email')) == null){
			$this->User_model->register($data_to_insert);
			$_SESSION['user'] = "User Account Created successfully";
		}else{
			$_SESSION['user'] = "User Account Exists";
		}
		$this->register();
	}

	
}
