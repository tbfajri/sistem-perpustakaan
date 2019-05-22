<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_model');
 		// halaman ini di proteksi bagi yang sudah login

	}
	public function index()
	{
		// validasi
		$this->form_validation->set_rules('email', 'Email/Username', 'required',
			array('required' => '%s harus diisi'));

		$this->form_validation->set_rules('password', 'Password', 'required',
			array('required' => '%s harus diisi'));

		if($this->form_validation->run())
		{
			$email = $this->input->post('email');
			$password = $this->input->post('password');
			// proses ke simpel login
			$this->simple_pelanggan->login($email, $password);
		}

		// end validasi

		$data = array(	'title' => 'Login Pelanggan',
						'isi'	=> 'masuk/list'
					);
		$this->load->view('layout/wrapper', $data, FALSE);
	}

	public function logout(){

	// ambil fungsi logout di Simple_pelanggan yang sudah di set di autoload libraries
	$this->simple_pelanggan->logout();

}

}

/* End of file Auth.php */
/* Location: ./application/controllers/Auth.php */