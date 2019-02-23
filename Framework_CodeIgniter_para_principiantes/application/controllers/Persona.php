<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Persona extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('form');
		$this->load->model('persona_model');
		$this->load->database();
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
		//$this->load->model('persona');
		$personas = $this->persona->findAll();

		var_dump($personas);
	}

		public function listado(){

		}

		public function guardar($persona_id = null){
			
			$data['nombre']     = '';
			$data['apellido']   = '';
			$data['edad']       = '';

			if(!empty($persona_id)){

			$datosPersona = $this->persona_model->find($persona_id,$persona_id);

			$data['nombre']     = $datosPersona->nombre;
			$data['apellido']   = $datosPersona->apellido;
			$data['edad']       = $datosPersona->edad;
			}

			if($this->input->server("REQUEST_METHOD") == "POST"){

				$nombre   = $this->input->post("nombre");
				$apellido = $this->input->post("apellido");
				$edad     = $this->input->post("edad");


if(!empty($nombre) && !empty($apellido)&& !empty($edad)){

		//echo "POST";
		$data["nombre"]   = $nombre;	
		$data["apellido"] = $apellido;	
		$data["edad"]     = $edad ;	


			if(!empty($persona_id)){

			$this->persona_model->update($persona_id,$data);
				echo "actualiza";
			}else{
				echo "inserta";
			$this->persona_model->insert($data);
			}	



}else{
	echo "campos vacio";
	exit;
}




		}
				$this->load->view('guardar_view',$data);
	}

		public function borrar(){

		}
}
