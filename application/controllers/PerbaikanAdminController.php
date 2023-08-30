<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerbaikanAdminController extends CI_Controller {

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
			'title' => 'Data Perbaikan',
			'perbaikan' => $this->m->getAllDataPerbaikan()
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/perbaikan/index');
		$this->load->view('layouts/footer');
	}

	public function create(){
		$data = array(
			'title' => 'Tambah Data Perbaikan',
			'aset' => $this->m->getAllDataAset()
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/perbaikan/create');
		$this->load->view('layouts/footer');
	}

	public function store(){
		$config['upload_path'] = 'src/img/perbaikan/'; 
		$config['allowed_types'] = 'jpg|png|jpeg';  
		$config['encrypt_name'] = TRUE; 
				
		$this->upload->initialize($config);

		$data = array(
			'aset_id' => $this->input->post('aset_id'), 
			'jumlah_perbaikan' => $this->input->post('jumlah_perbaikan'), 
			'status' => 'Proses'
		);

		if($this->upload->do_upload('foto')){
			$gbr = $this->upload->data();
			//Compress Image
			$config['image_library']='gd2';
			$config['source_image']='src/img/perbaikan/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '60%';
			$config['new_image']= 'src/img/perbaikan/'.$gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$data['foto'] = $gbr['file_name'];
		}

		$this->m->insertData('perbaikan', $data);

		//mengurangi jumlah di data aset
		$aset_id = $this->input->post('aset_id');

		$aset = $this->m->getDetailData('aset', 'id', $aset_id);

		$jumlah_aset = $aset['jumlah'];
		$jumlah_perbaikan = $this->input->post('jumlah_perbaikan');
		$total_aset = $jumlah_aset - $jumlah_perbaikan;

		$data_aset['jumlah'] = $total_aset;
		//update data aset
		$this->m->updateData('id', $aset_id, 'aset', $data_aset);

		$this->session->set_flashdata('success', 'Data berhasil disimpan.');
		redirect('admin/perbaikan');

	}

	public function show($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Aset',
			'perbaikan' => $this->m->getDetailDataPerbaikan($id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/perbaikan/show');
		$this->load->view('layouts/footer');
	}

	public function edit($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Aset',
			'perbaikan' => $this->m->getDetailData('perbaikan', 'id', $id),
			'merek' => $this->m->getAllDataAsc('merek', 'nama'),
			'ruangan' => $this->m->getAllDataAsc('ruangan', 'nama')
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/perbaikan/edit');
		$this->load->view('layouts/footer');
	}

	public function move($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Aset',
			'perbaikan' => $this->m->getDetailDataPerbaikan($id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/perbaikan/move');
		$this->load->view('layouts/footer');
	}

	public function update_data(){

		$id = $this->input->post('id');

		$config['upload_path'] = 'src/img/perbaikan/'; 
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
			'ruangan_id' => $this->input->post('ruangan_id'), 
		);

		if($this->upload->do_upload('gambar')){

			$perbaikan = $this->m->getDetailData('perbaikan', 'id', $id);

			unlink('src/img/perbaikan/'.$perbaikan['gambar']);

			$gbr = $this->upload->data();
			//Compress Image
			$config['image_library']='gd2';
			$config['source_image']='src/img/perbaikan/'.$gbr['file_name'];
			$config['create_thumb']= FALSE;
			$config['maintain_ratio']= FALSE;
			$config['quality']= '60%';
			$config['new_image']= 'src/img/perbaikan/'.$gbr['file_name'];
			$this->load->library('image_lib', $config);
			$this->image_lib->resize();

			$data['gambar'] = $gbr['file_name'];
		}

		$this->m->updateData('id', $id, 'perbaikan', $data);

		$this->session->set_flashdata('success', 'Data berhasil diubah.');
		redirect('admin/perbaikan');

	}

	public function move_data(){
		$id = $this->input->post('id');

		//menambah jumlah ke data aset
		$aset_id = $this->input->post('aset_id');

		$aset = $this->m->getDetailData('aset', 'id', $aset_id);

		$jumlah_aset = $aset['jumlah'];
		$jumlah_perbaikan = $this->input->post('jumlah_perbaikan');
		$total_aset = $jumlah_aset + $jumlah_perbaikan;

		$data_aset['jumlah'] = $total_aset;
		//update data aset
		$this->m->updateData('id', $aset_id, 'aset', $data_aset);

		//ubah status perbaikan
		$data_perbaikan['status'] = 'Selesai';
		$this->m->updateData('id', $id, 'perbaikan', $data_perbaikan);

		$this->session->set_flashdata('success', 'Data aset dari perbaikan telah ditambahkan ke data aset ruangan');
		redirect('admin/aset');
	}

	public function destroy($id){
		$id = $this->uri->segment(4);
		$perbaikan = $this->m->getDetailData('perbaikan', 'id', $id);
		unlink('src/img/perbaikan/'.$perbaikan['gambar']);

		$this->m->deleteData('id', $id, 'perbaikan');
		$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		redirect('admin/perbaikan');
	}

	public function perbaikan_ruangan($id){
		$id = $this->uri->segment(3);

		$data = array(
			'title' => 'Detail Data Aset',
			'perbaikan' => $this->m->getAllDataAsetByRuangan($id),
			'item' => $this->m->getDetailData('ruangan', 'id', $id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/perbaikan/ruangan');
		$this->load->view('layouts/footer');
	}
}
