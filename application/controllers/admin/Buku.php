<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buku extends CI_Controller {

	// load model

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('buku_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// data user

	public function index()
	{
		$buku = $this->buku_model->listing();

		$data = array( 	'title' => 'Data buku',
						'buku'	=> $buku,
						'isi'	=> 'admin/buku/list'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// tambah user
	public function tambah()
	{
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_buku', 'Nama buku', 'required',
			array('required' => '%s harus di isi'));

		$valid->set_rules('nama_penerbit', 'Nama Penerbit', 'required',
			array('required' => '%s harus di isi'));
		


		if($valid->run()===FALSE) {
			// end validasi

		$data = array( 	'title' => 'Tambah Buku ',
						'isi'	=> 'admin/buku/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk data base
		} else {

			$i 		= $this->input;
			$data = array(
							'nama_buku' 	=> $i->post('nama_buku'),
							'penerbit' 		=> $i->post('nama_penerbit'),
							'stok'			=> $i->post('stok')
										
				);

			$this->buku_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di tambah');
			redirect(base_url('admin/buku'),'refresh');
		}		
	}

	// tambah edit
	public function edit ($id_buku)
	{

		$buku = $this->buku_model->detail($id_buku);

		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_buku', 'Nama buku', 'required',
			array('required' => '%s harus di isi'));


		if($valid->run()===FALSE) {
			// end validasi

		$data = array(	'title' 	=> 'Edit buku',
						'buku'		=> $buku,
						'isi'		=> 'admin/buku/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk data base

		} else {

			$i 				= $this->input;
			$data = array(  'id_buku' 	=> $id_buku,
							'nama_buku' => $i->post('nama_buku'),
							'penerbit' 	=> $i->post('nama_penerbit'),
							'stok'		=> $i->post('stok')		
					);

			$this->buku_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di edit');
			redirect(base_url('admin/buku'),'refresh');
		}		
	}
	// function delete


	public function delete($id_buku)
	{
		$data = array('id_buku' => $id_buku);
		$this->buku_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah di hapus');
		redirect(base_url('admin/buku'),'refresh');
	}

	public function cetak(){

		$buku = $this->buku_model->listing();

		$data = array( 	'title' => 'Data buku',
						'buku'	=> $buku,
						'isi'	=> 'admin/buku/cetak'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file buku.php */
/* Location: ./application/controllers/admin/buku.php */