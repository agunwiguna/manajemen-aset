<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginController extends CI_Controller {

	public function __construct(){
		parent::__construct();

		$this->load->model('ModelLogin','ml');
	}

	public function index()
	{
		$this->load->view('auth/login');
	}

	public function proses_login(){
		$this->form_validation->set_rules('username', 'Username', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required');

		if ($this->form_validation->run() != false) {
			$username = $this->input->post('username');
			$password = $this->input->post('password');

			$cek = $this->ml->cek_login($username, md5($password));

			if ($cek == 1) {
				$row = $this->ml->data_login($username, md5($password));

				$data = array(
					'logged' => TRUE,
					'name' => $row->name,
					'username' => $row->username,
					'role' => $row->role,
				);

				$this->session->set_userdata($data);
				redirect('admin/dashboard');
			} else {
				$this->session->set_flashdata('failed', 'Username atau password salah');
				redirect('/');
			}
			
		} else {
			$this->load->view('auth/login');
		}
		
	}

	public function proses_logout(){
		$this->session->sess_destroy();
		redirect('/');
	}
}
