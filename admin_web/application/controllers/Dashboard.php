<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	 public function __construct() {
	 	parent::__construct();
	 	$this->load->library('session');
	 	$this->load->database();
	 	$this->load->library('session');
	 	$this->load->model('User_model');
	 	$this->load->library(array('form_validation'));
	 }
	 public function index(){
	 	$data['change'] = 0;
	 	$this->load->view('dashboard_handler',$data);
	 }
	 public function logout(){
	 	unset($_SESSION['active']);
	 	$data['change'] = 2;
	 	$this->load->view('template', $data);
	 }

	public function menu(){
		$data['change'] = $this->uri->segment(3);
	 	$this->load->view('dashboard_handler', $data);
	} 	


}