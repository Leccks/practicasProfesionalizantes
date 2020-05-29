<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agregar_prod_controller extends CI_Controller {

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
		$this->load->view('agregar_prod');
	}

    public function create(){
        $nombre = $this->input->post('nombre');
        $desc = $this->input->post('desc');
        $precio = $this->input->post('precio');
        $stock = $this->input->post('stock');

        $datos = array(
            'nombre' => $nombre,
            'descripcion' => $desc,
            'precio' => $precio,
            'stock' => $stock
        );

        if(!$this->db->insert('productos', $datos)){
            echo "Hubo un error al ingresar el producto";
        }else{
            echo "El producto se ha agregado correctamente";
        }
    }

	public function style(){
		$this->load->view('login.css');
	}

}