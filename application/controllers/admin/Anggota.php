<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Anggota extends CI_Controller {

	
	// load model

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('anggota_model');
		// proteksi halaman
		$this->simple_login->cek_login();
	}

	// data user

	public function index()
	{
		$anggota = $this->anggota_model->listing();

		$data = array( 	'title'	 	=> 'Data anggota',
						'anggota'	=> $anggota,
						'isi'		=> 'admin/anggota/list'

					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	// tambah user
	public function tambah()
	{
		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_anggota', 'Nama anggota', 'required',
			array('required' => '%s harus di isi'));


		if($valid->run()===FALSE) {
			// end validasi

		$data = array( 	'title' => 'Tambah Anggota ',
						'isi'	=> 'admin/anggota/tambah'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk data base
		} else {

			$i 		= $this->input;
			$data = array(  'nama' 		=> $i->post('nama_anggota'),
							'status' 	=> $i->post('status'),					
				);

			$this->anggota_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di tambah');
			redirect(base_url('admin/anggota'),'refresh');
		}		
	}

	// tambah edit
	public function edit ($id_anggota)
	{

		$anggota = $this->anggota_model->detail($id_anggota);

		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('nama_anggota', 'Nama anggota', 'required',
			array('required' => '%s harus di isi'));


		if($valid->run()===FALSE) {
			// end validasi

		$data = array( 	'title' => 'Edit anggota ',
						'anggota'	=> $anggota,
						'isi'	=> 'admin/anggota/edit'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
		// masuk data base

		} else {

			$i 		= $this->input;

			$data 	= array('id_anggota' => $id_anggota,
							'nama' 			=> $i->post('nama_anggota'),
							'status' 		=> $i->post('status'),
					);
			$this->anggota_model->edit($data);
			$this->session->set_flashdata('sukses', 'Data berhasil di edit');
			redirect(base_url('admin/anggota'),'refresh');
		}		
	}
	// function delete


	public function delete($id_anggota)
	{
		$data = array('id_anggota' => $id_anggota);
		$this->anggota_model->delete($data);
		$this->session->set_flashdata('sukses', 'Data telah di hapus');
		redirect(base_url('admin/anggota'),'refresh');
	}
}

/* End of file Anggota.php */
/* Location: ./application/controllers/admin/Anggota.php */