<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class persona_model extends CI_Model {

	public $table    = 'personas';
	public $table_id = 'idPersona';


	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


		function find($persona_id){
			$this->db->select();
			$this->db->from($this->table);
			$this->db->where($this->table_id,$persona_id);
			$query = $this->db->get();
			return $query->row();
		}

		function findAll(){
			$this->db->select();
			$this->db->from($this->table);
			$query = $this->db->get();
			return $query->result();
		}

		function insert($data){
			$this->db->insert($this->table,$data);
		}

		function update($persona_id,$data){

		$this->db->set($data);
		$this->db->where($this->table_id, $persona_id);
		$this->db->update($this->table);

		}
}
