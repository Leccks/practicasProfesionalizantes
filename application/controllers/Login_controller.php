<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function index()
	{	
		$this->load->view('navbar');
		$this->load->view('login');
	}
}