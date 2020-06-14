<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_controller extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper(array('geturl','url'));
		$this->load->database();
//		if(isset($_SESSION['mail'])){
//			redirect($data['url'][0]['url']);
//		}
	}

	public function index(){
		$data['validacion'] = true;
		$data['url'] = url();
		$mail = $this->input->post('mail');
		$pass = $this->input->post('password');
		if((!empty($mail) || !empty($pass)) && (!$res = $this->auth($mail,$pass))){
			$data['validacion'] = false;
		}else if((!empty($mail) || !empty($pass)) && ($res = $this->auth($mail,$pass))){
			$this->set_session($mail,$pass);
			redirect($data['url'][0]['url']);
		}
		$this->load->view('navbar',$data);
		$this->load->view('login',$data);
	}

	public function auth($mail, $pass){
		$datos = $this->db->get_where('usuarios',array('mail' => $mail, 'password' => $pass), 1);
		if(!$datos->result()){
			return false;
		}
		return $datos->result();
	}

	public function set_session($mail,$pass){
		$session_data = array(
			'mail' => $mail,
			'pass' => $pass
		);
		$this->session->set_userdata($session_data);
	}
	
}