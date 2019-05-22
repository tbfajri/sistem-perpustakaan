<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth_model extends CI_Model {

		public function login($username, $password){

		$this->db->select('*');
		$this->db->from('t_pustakawan');
		$this->db->where(array(	'username'		=> $username,
								'password'		=> SHA1($password)
							));
		$this->db->order_by('id_pustakawan', 'desc');
		$query = $this->db->get();
		return $query->row();

	}

	// t_pustakawan sudah login
	public function sudah_login($username, $password){
		$this->db->select('*');
		$this->db->from('t_pustakawan');
		$this->db->where(array('username' => $username,
								'password'=> $password
							));
		$this->db->order_by('id_pustakawan', 'desc');
		$query = $this->db->get();
		return $query->row();

	}

}

/* End of file Auth_model.php */
/* Location: ./application/models/Auth_model.php */