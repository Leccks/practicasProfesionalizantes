<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->load->helper(array('geturl','url'));
		$this->load->database();
	}

	public function index(){	
		$data['url'] = url();
		$this->load->view('navbar',$data);
		$this->load->view('login');
	}

	public function validate(){
		$mail = $this->input->post('mail');
		$pass = $this->input->post('password');
		echo $mail;
		echo $pass;
		if(!$res = $this->auth($mail,$pass)){
			echo "Datos invalidos. Vuelva a intentarlo.";
		}
		var_dump($res);
	}

	public function auth($mail, $pass){
		$data = $this->db->get_where('usuarios',array('mail' => $mail, 'password' => $pass), 1);
		if(!$data->result()){
			return false;
		}
		return $data->result();
	}
}