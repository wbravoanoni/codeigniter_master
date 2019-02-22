<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class persona extends CI_Model {

	public $table    = 'personas';
	public $table_id = 'idPersona';


	public function __construct(){
		parent::__construct();
		$this->load->database();
	}


		function find(){
			$this->db->select();
			$this->db->from($this->table);
			$this->db->where($this->table_id,$id);
			$query = $this->db->get();
			return $query->row();
		}

		function findAll(){
			$this->db->select();
			$this->db->from($this->table);
			$query = $this->db->get();
			return $query->result();
		}
}
