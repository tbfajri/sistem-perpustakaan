<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all user
	public function listing(){

		$this->db->select('t_transaksi.*,
						t_anggota.id_anggota,
						t_anggota.nama,
						t_pustakawan.nama_pustakawan,
						');
		$this->db->from('t_transaksi');

		// Join Database
		$this->db->join('t_anggota', 't_anggota.id_anggota = t_transaksi.id_anggota', 'left');
		$this->db->join('t_pustakawan', 't_pustakawan.id_pustakawan = t_transaksi.id_pustakawan', 'left');
		// end join
		$this->db->group_by('t_transaksi.id_transaksi');
		$this->db->order_by('t_transaksi.id_transaksi', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	
// listing all transaksi
	public function read($slug_transaksi){

		$this->db->select('transaksi.*,
						users.nama,
						pelanggan.id_pelanggan,
						pelanggan.nama_pelanggan,
						kategori.nama_kategori,
						kategori.slug_kategori,
						COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('t_transaksi');

		// Join Database
		$this->db->join('users', 'users.id_user = transaksi.id_user', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = transaksi.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_transaksi = transaksi.id_transaksi', 'left');
		// end join
		$this->db->where('t_transaksi.status_transaksi', 'Publish');
		$this->db->where('t_transaksi.slug_transaksi', $slug_transaksi);
		$this->db->group_by('t_transaksi.id_transaksi');
		$this->db->order_by('id_transaksi', 'desc');

		$query = $this->db->get();
		return $query->row();
	}

	// listing all transaksi
	public function transaksi($limit, $start){

		$this->db->select('t_transaksi.*,
						users.nama,
						pelanggan.id_pelanggan,
						pelanggan.nama_pelanggan,
						kategori.nama_kategori,
						kategori.slug_kategori,
						COUNT(gambar.id_gambar) AS total_gambar');
		$this->db->from('t_transaksi');

		// Join Database
		$this->db->join('users', 'users.id_user = transaksi.id_user', 'left');
		$this->db->join('pelanggan', 'pelanggan.id_pelanggan = transaksi.id_pelanggan', 'left');
		$this->db->join('kategori', 'kategori.id_kategori = transaksi.id_kategori', 'left');
		$this->db->join('gambar', 'gambar.id_transaksi = transaksi.id_transaksi', 'left');
		// end join
		$this->db->where('t_transaksi.status_transaksi', 'Publish');
		$this->db->group_by('t_transaksi.id_transaksi');
		$this->db->order_by('rand()');
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query->result();
	}

	public function total_transaksi()
	{
		$this->db->select('COUNT(*) AS total');
		$this->db->from('t_transaksi');
		$this->db->where('status', 'Dipinjam');
		$query = $this->db->get();
		return $query->row();
	}
			

	public function tambah($data)
	{
		$this->db->insert('t_transaksi', $data);
	}

	public function delete($data)
	{
		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->delete('t_transaksi', $data);
	}

	public function edit($data){

		$this->db->where('id_transaksi', $data['id_transaksi']);
		$this->db->update('t_transaksi', $data);


	}

	public function detail($id_transaksi){

		$this->db->select('*');
		$this->db->from('t_transaksi');
		$this->db->order_by('id_transaksi', 'desc');
		$this->db->where('id_transaksi', $id_transaksi);
		$query = $this->db->get();
		return $query->row();

	}



}

/* End of file Transaksi_model.php */
/* Location: ./application/models/Transaksi_model.php */