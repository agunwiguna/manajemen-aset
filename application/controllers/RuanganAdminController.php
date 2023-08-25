<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RuanganAdminController extends CI_Controller {

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
			'title' => 'Data Ruangan',
			'ruangan' => $this->m->getAllDataDesc('ruangan', 'id')
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/ruangan/index');
		$this->load->view('layouts/footer');
	}

	public function create(){
		$data = array(
			'title' => 'Tambah Data Ruangan',
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/ruangan/create');
		$this->load->view('layouts/footer');
	}

	public function store(){

		$data = array(
			'nama' => $this->input->post('nama'), 
			'tgl_input' => date('Y-m-d H:i:s'),  
		);

		$this->m->insertData('ruangan', $data);

		$this->session->set_flashdata('success', 'Data berhasil disimpan.');
		redirect('admin/ruangan');

	}

	public function show($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Ruangan',
			'ruangan' => $this->m->getDetailData('ruangan', 'id', $id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/ruangan/show');
		$this->load->view('layouts/footer');
	}

	public function edit($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Ruangan',
			'ruangan' => $this->m->getDetailData('ruangan', 'id', $id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/ruangan/edit');
		$this->load->view('layouts/footer');
	}

	public function update_data(){

		$id = $this->input->post('id');

		$data = array(
			'nama' => $this->input->post('nama'), 
			'tgl_input' => date('Y-m-d H:i:s'),  
		);

		$this->m->updateData('id', $id, 'ruangan', $data);

		$this->session->set_flashdata('success', 'Data berhasil diubah.');
		redirect('admin/ruangan');

	}

	public function destroy($id){
		$id = $this->uri->segment(4);

		$this->m->deleteData('id', $id, 'ruangan');
		$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		redirect('admin/ruangan');
	}
}
