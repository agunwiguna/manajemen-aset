<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserAdminController extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('logged') <> 1){
			redirect('/');
		}

		$this->load->model('Master','m');
	}

	public function index()
	{
		$data = array(
			'title' => 'Data User',
			'user' => $this->m->getAllDataDesc('users', 'id')
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/user/index');
		$this->load->view('layouts/footer');
	}

	public function create(){
		$data = array(
			'title' => 'Tambah Data User',
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/user/create');
		$this->load->view('layouts/footer');
	}

	public function store(){

		$data = array(
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'), 
			'password' => md5($this->input->post('password')),
			'role' => $this->input->post('role'), 
		);

		$this->m->insertData('users', $data);

		$this->session->set_flashdata('success', 'Data berhasil disimpan.');
		redirect('admin/user');

	}


	public function edit($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data User',
			'item' => $this->m->getDetailData('users', 'id', $id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/user/edit');
		$this->load->view('layouts/footer');
	}

	public function update_data(){

		$id = $this->input->post('id');

		$data = array(
			'name' => $this->input->post('name'),
			'username' => $this->input->post('username'),
			'role' => $this->input->post('role'), 
		);

		if ($this->input->post('password')) {
			$data['password'] = md5($this->input->post('password'));
		}

		$this->m->updateData('id', $id, 'users', $data);

		$this->session->set_flashdata('success', 'Data berhasil diubah.');
		redirect('admin/user');

	}

	public function destroy($id){
		$id = $this->uri->segment(4);

		$this->m->deleteData('id', $id, 'users');
		$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		redirect('admin/user');
	}
}
