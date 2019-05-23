<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {

	
	// load model

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('transaksi_model');
		$this->load->model('anggota_model');
		$this->load->model('buku_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// data user

	public function index()
	{
		$transaksi = $this->transaksi_model->listing();

		$data = array( 	'title' => 'Data transaksi',
						'transaksi'	=> $transaksi,
						'isi'	=> 'admin/transaksi/list'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// tambah user
	public function tambah()
	{
		//validasi input
		$nama_anggota		= $this->anggota_model->listing_aktif();
		$nama_buku			= $this->buku_model->listing();
		$tanggal_pinjam 	= date('Y-m-d');
		$tanggal_kembali	= date('Y-m-d', strtotime('+1 week', strtotime($tanggal_pinjam)));
		$valid = $this->form_validation;

		$valid->set_rules('nama_anggota', 'Nama Anggota', 'required',
			array('required' => '%s harus di isi'));

		$valid->set_rules('nama_buku', 'Nama Buku', 'required',
			array('required' => '%s harus di isi'));

		
		if($valid->run()===FALSE) {
			// end validasi

		$data = array( 	'title' 		=> 'Tambah Transaksi ',
						'isi'			=> 'admin/transaksi/tambah',
						'nama_anggota'	=> $nama_anggota,
						'nama_buku'		=> $nama_buku,
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk data base
		} else {
			
			$i 				= $this->input;
			$data 			= array(
									'id_pustakawan' 	=> $this->session->userdata('id_pustakawan'),
									'nama_anggota' 		=> $i->post('nama_anggota'),
									'nama_petugas' 		=> $this->session->userdata('username'),
									'nama_buku'			=> $i->post('nama_buku'),
									'tgl_pinjam'		=> $tanggal_pinjam,
									'tgl_maksimal'		=> $tanggal_kembali,
									'denda'				=> 0,
									'status' 			=> $i->post('status'),

														
								);

			$this->transaksi_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di tambah');
			redirect(base_url('admin/transaksi'),'refresh');
		}		
	}

	// tambah edit
	public function edit ($id_transaksi)
	{

		$transaksi = $this->transaksi_model->detail($id_transaksi);
		$tanggal_pinjam 	= date('Y-m-d');
		$tanggal_kembali	= date('Y-m-d', strtotime('+1 week', strtotime($tanggal_pinjam)));
		$lama_buku_dipinjam = $tanggal_kembali - $tanggal_pinjam;
		$jumlah_hari		= floor($lama_buku_dipinjam / (60 * 60 * 24));
		if($jumlah_hari > 7 ){
			$denda = $jumlah_hari * 500;
		} else {
			$denda = 0;
		}
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_buku', 'Nama Buku', 'required',
			array('required' => '%s harus di isi'));


		if($valid->run()===FALSE) {
			// end validasi
		// masuk data base
			$i 		= $this->input;
			$data 	= array(
					'id_transaksi'		=> $id_transaksi,
					'tgl_kembali'		=> date('Y-m-d'),
					'status' 			=> 'Kembalikan',
					'denda'				=> $denda
										
				);

			$this->transaksi_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di edit');
			redirect(base_url('admin/transaksi'),'refresh');
		}		
	}
	// function delete


	public function delete($id_transaksi)
	{
		$data = array('id_transaksi' => $id_transaksi);
		$this->transaksi_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah di hapus');
		redirect(base_url('admin/transaksi'),'refresh');
	}

		// cetak	
	public function cetak(){

		$transaksi = $this->transaksi_model->listing();

		$data = array( 	'title' => 'Data transaksi',
						'transaksi'	=> $transaksi,
						'isi'	=> 'admin/transaksi/cetak'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Transaksi.php */
/* Location: ./application/controllers/admin/Transaksi.php */