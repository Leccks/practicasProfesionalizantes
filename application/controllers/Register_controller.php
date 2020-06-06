<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_controller extends CI_Controller {

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
        $this->load->database();
	}

	public function index(){	
		$data['url'] = url();
		$this->load->view('navbar',$data);
		$this->load->view('register');
    }
    
    public function create(){
        $name = $this->input->post('name');
        $mail = $this->input->post('mail');
        $pass = $this->input->post('pass');

        $datos = array(
            'nombre' => $name,
            'mail' => $mail,
            'password' => $pass,
            'admin' => 0
        );

        if(!$this->db->insert('usuarios', $datos)){
            echo "Hubo un error al ingresar el producto";
        }else{
            header("location:".base_url()."");
        }
    }
}