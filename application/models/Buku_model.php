<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all user
	public function listing(){

		$this->db->select('*');
		$this->db->from('t_buku');
		$this->db->order_by('id_buku', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function tambah($data)
	{
		$this->db->insert('t_buku', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_buku', $data['id_buku']);
		$this->db->delete('t_buku', $data);
	}

	public function detail($id_buku){

		$this->db->select('*');
		$this->db->from('t_buku');
		$this->db->order_by('id_buku', 'desc');
		$this->db->where('id_buku', $id_buku);
		$query = $this->db->get();
		return $query->row();

	}

	public function read($slug_buku){

		$this->db->select('*');
		$this->db->from('t_buku');
		$this->db->where('slug_buku', $slug_buku);
		$this->db->order_by('id_buku', 'desc');
		$query = $this->db->get();
		return $query->row();

	}

	public function edit($data){

		$this->db->where('id_buku', $data['id_buku']);
		$this->db->update('t_buku', $data);


	}



}

/* End of file Buku_model.php */
/* Location: ./application/models/Buku_model.php */