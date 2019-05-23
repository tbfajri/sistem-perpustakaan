<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		// validasi
		$this->form_validation->set_rules('username', 'username', 'required',
			array('required' => '%s harus diisi'));

		$this->form_validation->set_rules('password', 'Password', 'required',
			array('required' => '%s harus diisi'));

		if($this->form_validation->run())
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
			// proses ke simpel login
			$this->simple_login->login($username, $password);
		}

		// end validasi	
		$data = array( 'title' => 'Login Adminstrator');
		$this->load->view('admin/login/list', $data, FALSE);
		
	}

	// function logout
	public function logout(){

		// ambil fungsi logout dari simple login
		$this->simple_login->logout();
	}

}
