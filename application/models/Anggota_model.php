<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all user
	public function listing(){

		$this->db->select('*');
		$this->db->from('t_anggota');
		$this->db->order_by('id_anggota', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	public function tambah($data)
	{
		$this->db->insert('pelanggan', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_anggota', $data['id_anggota']);
		$this->db->delete('pelanggan', $data);
	}

	public function detail($id_anggota){

		$this->db->select('*');
		$this->db->from('pelanggan');
		$this->db->where('id_anggota', $id_anggota);
		$this->db->order_by('id_anggota', 'desc');
		$query = $this->db->get();
		return $query->row();

	}



	
	public function edit($data){

		$this->db->where('id_anggota', $data['id_anggota']);
		$this->db->update('pelanggan', $data);


	}



}

/* End of file Pelanggan_model.php */
/* Location: ./application/models/Pelanggan_model.php */