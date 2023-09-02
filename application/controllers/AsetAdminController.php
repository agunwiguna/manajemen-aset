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
			'aset' => $this->m->getAllDataAset()
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/aset/index');
		$this->load->view('layouts/footer');
	}

	public function create(){
		$data = array(
			'title' => 'Tambah Data Aset',
			'merek' => $this->m->getAllDataAsc('merek', 'nama'),
			'ruangan' => $this->m->getAllDataAsc('ruangan', 'nama')
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
			'ruangan_id' => $this->input->post('ruangan_id'), 
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
			'aset' => $this->m->getDetailDataAset($id)
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
			'aset' => $this->m->getDetailData('aset', 'id', $id),
			'merek' => $this->m->getAllDataAsc('merek', 'nama'),
			'ruangan' => $this->m->getAllDataAsc('ruangan', 'nama')
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/aset/edit');
		$this->load->view('layouts/footer');
	}

	public function kerusakan($id){
		$id = $this->uri->segment(4);
		$aset = $this->m->getDetailData('aset', 'id', $id);
		$ruangan_id = $aset['ruangan_id'];
		$rg = $this->db->get_where('ruangan', array('id' => $ruangan_id))->row_array();

		$data = array(
			'title' => 'Detail Data Aset',
			'aset' => $aset,
			'rg' => $rg,
			'merek' => $this->m->getAllDataAsc('merek', 'nama'),
			'ruangan' => $this->m->getAllDataAsc('ruangan', 'nama'),
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/aset/kerusakan');
		$this->load->view('layouts/footer');
	}

	public function store_kerusakan(){

		$data = array(
			'aset_id' => $this->input->post('aset_id'), 
			'kondisi_kerusakan' => $this->input->post('kondisi_kerusakan'),
			'status' => '0',
			'is_notif' => '0',
			'created_at' => date('Y-m-d H:i:s') 
		);

		$this->db->insert('monitoring', $data);
   		$monitoring_id = $this->db->insert_id();

		//upload multiple
		$files           = $_FILES;
		$number_of_files = count($_FILES['foto']['name']);
		$errors = 0;

		for ($i = 0; $i < $number_of_files; $i++)
		{
			$_FILES['foto']['name'] = $files['foto']['name'][$i];
			$_FILES['foto']['type'] = $files['foto']['type'][$i];
			$_FILES['foto']['tmp_name'] = $files['foto']['tmp_name'][$i];
			$_FILES['foto']['error'] = $files['foto']['error'][$i];
			$_FILES['foto']['size'] = $files['foto']['size'][$i];

			$uniqueFileName = time() . '_' . uniqid() . '_' . $i;
			$encryptedFileName = md5($uniqueFileName);
			$originalExtension = pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION);
			$finalFileName = $encryptedFileName . '.' . $originalExtension;

			$config['upload_path'] = 'src/img/monitoring/'; 
			$config['allowed_types'] = 'jpg|png|jpeg'; 
			$config['file_name'] = $finalFileName;

			$this->upload->initialize($config);

			if (! $this->upload->do_upload("foto")) {
				$errors++;
			}else{

				$data_m = array(
					'monitoring_id' => $monitoring_id
				);

				$data_m['foto'] = $finalFileName;;
				
				$res = $this->db->insert('galeri_monitoring',$data_m);
			}	
		}

		//update aset
		$aset_id = $this->input->post('aset_id');
		$data_aset['is_active'] = '0';
		$this->m->updateData('id', $aset_id, 'aset', $data_aset);

		$this->session->set_flashdata('success', 'Pengajuan kerusakan berhasil disimpan.');
		redirect('admin/kerusakan');
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
			'ruangan_id' => $this->input->post('ruangan_id'), 
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

	public function aset_ruangan($id){
		$id = $this->uri->segment(3);

		$data = array(
			'title' => 'Detail Data Aset',
			'aset' => $this->m->getAllDataAsetByRuangan($id),
			'item' => $this->m->getDetailData('ruangan', 'id', $id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/aset/ruangan');
		$this->load->view('layouts/footer');
	}

	public function show_repair($id){
		$id = $this->uri->segment(3);
		$ruangan_id = $this->uri->segment(4);

		$data = array(
			'is_notif' => '1',  
		);

		$this->m->updateData('id', $id, 'notif_perbaikan', $data);
		redirect('admin/aset-ruangan/'.$ruangan_id);
	}
}
