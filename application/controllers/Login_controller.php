<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('geturl','url'));
	}

	public function index(){	
		$data['url'] = url();
		$this->load->view('navbar',$data);
		$this->load->view('login');
	}
}