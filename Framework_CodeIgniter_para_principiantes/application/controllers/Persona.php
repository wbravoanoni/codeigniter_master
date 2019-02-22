<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
	}

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
	public function index()
	{
		$this->load->view('saludar_view.php');
	}

		public function test()
	{
		$this->load->model('persona');
		$personas = $this->persona->findAll();

		var_dump($personas);
	}

		public function listado(){

		}

		public function guardar(){
			$this->load->view('guardar_view');
		}

		public function borrar(){

		}
}
