<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio_controller extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function __construct(){
		parent::__construct();
		
		$this->load->helper(array('geturl','url'));
	}

	public function index(){	
		$data['url'] = url();
		$this->load->view('navbar',$data);
		$this->load->view('inicio');
	}

	public function cerrar_sesion(){
		echo "CERRAAAAAAAAAR";
		$this->session->set_userdata(array('mail' => '', 'pass' => ''));
		redirect($data['url'][0]['url']);
		session_destroy();
	}

}
