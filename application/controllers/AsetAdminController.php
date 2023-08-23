<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AsetAdminController extends CI_Controller {

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
			'title' => 'Data Aset',
			'aset' => $this->m->getAllDataDesc('aset', 'id')
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/aset/index');
		$this->load->view('layouts/footer');
	}

	public function create(){
		$data = array(
			'title' => 'Tambah Data Aset',
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/aset/create');
		$this->load->view('layouts/footer');
	}

	public function store(){
		$config['upload_path'] = 'src/img/aset/'; 
		$config['allowed_types'] = 'jpg|png|jpeg';  
		$config['encrypt_name'] = TRUE; 
				
		$this->upload->initialize($config);

		$data = array(
			'kode_aset' => $this->input->post('kode_aset'), 
			'nama_barang' => $this->input->post('nama_barang'), 
			'merek' => $this->input->post('merek'), 
			'kondisi' => $this->input->post('kondisi'), 
			'tahun_perolehan' => $this->input->post('tahun_perolehan'), 
			'jumlah' => $this->input->post('jumlah'), 
		);

		if($this->upload->do_upload('gambar')){
			$gbr = $this->upload->data();
			//Compress Image
			$config['image_library']='gd2';
			$config['source_image']='src/img/aset/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '60%';
			$config['new_image']= 'src/img/aset/'.$gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$data['gambar'] = $gbr['file_name'];
		}

		$this->m->insertData('aset', $data);

		$this->session->set_flashdata('success', 'Data berhasil disimpan.');
		redirect('admin/aset');

	}

	public function show($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Aset',
			'aset' => $this->m->getDetailData('aset', 'id', $id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/aset/show');
		$this->load->view('layouts/footer');
	}

	public function edit($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Aset',
			'aset' => $this->m->getDetailData('aset', 'id', $id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/aset/edit');
		$this->load->view('layouts/footer');
	}

	public function update_data(){

		$id = $this->input->post('id');

		$config['upload_path'] = 'src/img/aset/'; 
		$config['allowed_types'] = 'jpg|png|jpeg';  
		$config['encrypt_name'] = TRUE; 
				
		$this->upload->initialize($config);

		$data = array(
			'kode_aset' => $this->input->post('kode_aset'), 
			'nama_barang' => $this->input->post('nama_barang'), 
			'merek' => $this->input->post('merek'), 
			'kondisi' => $this->input->post('kondisi'), 
			'tahun_perolehan' => $this->input->post('tahun_perolehan'), 
			'jumlah' => $this->input->post('jumlah'), 
		);

		if($this->upload->do_upload('gambar')){

			$aset = $this->m->getDetailData('aset', 'id', $id);

			unlink('src/img/aset/'.$aset['gambar']);

			$gbr = $this->upload->data();
			//Compress Image
			$config['image_library']='gd2';
			$config['source_image']='src/img/aset/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '60%';
			$config['new_image']= 'src/img/aset/'.$gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$data['gambar'] = $gbr['file_name'];
		}

		$this->m->updateData('id', $id, 'aset', $data);

		$this->session->set_flashdata('success', 'Data berhasil diubah.');
		redirect('admin/aset');

	}

	public function destroy($id){
		$id = $this->uri->segment(4);
		$aset = $this->m->getDetailData('aset', 'id', $id);
		unlink('src/img/aset/'.$aset['gambar']);

		$this->m->deleteData('id', $id, 'aset');
		$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		redirect('admin/aset');
	}
}
