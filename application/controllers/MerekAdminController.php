<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MerekAdminController extends CI_Controller {

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
			'title' => 'Data Merek',
			'merek' => $this->m->getAllDataDesc('merek', 'id')
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/merek/index');
		$this->load->view('layouts/footer');
	}

	public function create(){
		$data = array(
			'title' => 'Tambah Data Merek',
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/merek/create');
		$this->load->view('layouts/footer');
	}

	public function store(){

		$data = array(
			'nama' => $this->input->post('nama'), 
			'tgl_input' => date('Y-m-d H:i:s'),  
		);

		$this->m->insertData('merek', $data);

		$this->session->set_flashdata('success', 'Data berhasil disimpan.');
		redirect('admin/merek');

	}

	public function show($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Merek',
			'merek' => $this->m->getDetailData('merek', 'id', $id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/merek/show');
		$this->load->view('layouts/footer');
	}

	public function edit($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Merek',
			'merek' => $this->m->getDetailData('merek', 'id', $id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/merek/edit');
		$this->load->view('layouts/footer');
	}

	public function update_data(){

		$id = $this->input->post('id');

		$data = array(
			'nama' => $this->input->post('nama'), 
			'tgl_input' => date('Y-m-d H:i:s'),  
		);

		$this->m->updateData('id', $id, 'merek', $data);

		$this->session->set_flashdata('success', 'Data berhasil diubah.');
		redirect('admin/merek');

	}

	public function destroy($id){
		$id = $this->uri->segment(4);

		$this->m->deleteData('id', $id, 'merek');
		$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		redirect('admin/merek');
	}
}
