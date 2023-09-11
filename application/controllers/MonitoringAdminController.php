<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MonitoringAdminController extends CI_Controller {

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
			'title' => 'Monitoring',
			'monitoring' => $this->m->getAllDataMonitoring()
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/monitoring/index');
		$this->load->view('layouts/footer');
	}

	public function create(){
		$data = array(
			'title' => 'Pengajuan Kerusakan',
			'aset' => $this->m->getAllDataAset()
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/monitoring/create');
		$this->load->view('layouts/footer');
	}

	public function store(){

		$data = array(
			'aset_id' => $this->input->post('aset_id'), 
			'kondisi_kerusakan' => $this->input->post('kondisi_kerusakan'), 
			'jml_kerusakan' => $this->input->post('jml_kerusakan'),
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

		$this->session->set_flashdata('success', 'Data berhasil disimpan.');
		redirect('admin/monitoring');

	}

	public function show($id){
		$id = $this->uri->segment(4);

		$data = array(
			'title' => 'Detail Data Aset',
			'aset' => $this->m->getDetailDataMonitoring($id)
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/monitoring/show');
		$this->load->view('layouts/footer');
	}

	public function destroy($id){
		$id = $this->uri->segment(4);
		$foto = $this->db->get_where('galeri_monitoring', array('monitoring_id' => $id))->result_array();
		foreach ($foto as $key) {
			unlink('src/img/monitoring/'.$key['foto']);
		}

		//hapus data foto di database
		$this->m->deleteData('monitoring_id', $id, 'galeri_monitoring');

		//hapus data kerusakan di database
		$this->m->deleteData('id', $id, 'monitoring');
		$this->session->set_flashdata('success', 'Data berhasil dihapus.');
		redirect('admin/kerusakan');
	}

	public function approve(){

		$id = $this->uri->segment(4);

		$data = array(
			'status' => '1',
			'is_notif' => '1'
		);

		$this->m->updateData('id', $id, 'monitoring', $data);

		$this->session->set_flashdata('success', 'Pengajuan kerusakan berhasil disetujui.');
		redirect('admin/kerusakan');
	}

	public function approve_perbaikan($id,$aset_id){

		$id = $this->uri->segment(4);
		$aset_id = $this->uri->segment(5);

		//get data aset
		$aset = $this->m->getDetailData('aset', 'id', $aset_id);
		$ruangan_id = $aset['ruangan_id'];

		//update aset
		$data_aset['is_active'] = '1';
		$this->m->updateData('id', $aset_id, 'aset', $data_aset);

		//insert notif perbaikan
		$notif_perbaikan = array(
			'aset_id' => $aset_id,
			'is_notif' => '0'
		);

		$this->m->insertData('notif_perbaikan', $notif_perbaikan);

		$data = array(
			'is_repair' => '1'
		);

		$this->m->updateData('id', $id, 'monitoring', $data);

		$this->session->set_flashdata('success', 'Aset telah dilakukan perbaikan.');
		redirect('admin/aset-ruangan/'.$ruangan_id);
	}

	public function reject(){

		$id = $this->uri->segment(4);

		// $data = array(
		// 	'status' => '2',
		// 	'is_notif' => '1'
		// );

		//$this->m->updateData('id', $id, 'monitoring', $data);

		//kembali ke data aset
		$item = $this->m->getDetailDataMonitoring($id);
		$aset_id = $item['aset_id'];
		$ruangan_id = $item['ruangan_id'];
		$data_aset['is_active'] = '1';
		$this->m->updateData('id', $aset_id, 'aset', $data_aset);

		//hapus data kerusakan
		$foto = $this->db->get_where('galeri_monitoring', array('monitoring_id' => $id))->result_array();
		foreach ($foto as $key) {
			unlink('src/img/monitoring/'.$key['foto']);
		}

		//hapus data foto di database
		$this->m->deleteData('monitoring_id', $id, 'galeri_monitoring');

		//hapus data kerusakan di database
		$this->m->deleteData('id', $id, 'monitoring');

		$this->session->set_flashdata('success', 'Pengajuan kerusakan berhasil ditolak.');
		redirect('admin/aset-ruangan/'.$ruangan_id);
	}

	public function reject_perbaikan(){

		$id = $this->uri->segment(4);

		$data = array(
			'is_repair' => '2',
			'status' => '1',
		);

		$this->m->updateData('id', $id, 'monitoring', $data);

		$this->session->set_flashdata('success', 'Pengajuan kerusakan berhasil ditolak.');
		redirect('admin/kerusakan');
	}

	public function cancel(){

		$id = $this->uri->segment(4);

		$data = array(
			'status' => '0',
			'is_notif' => '0'
		);

		$this->m->updateData('id', $id, 'monitoring', $data);

		$this->session->set_flashdata('success', 'Pengajuan kerusakan berhasil dibatalkan.');
		redirect('admin/kerusakan');
	}

	public function laporan()
	{
		$data = array(
			'title' => 'Monitoring',
			'monitoring' => $this->m->getLaporanKerusakan()
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/monitoring/laporan');
		$this->load->view('layouts/footer');
	}

	public function print_laporan()
	{
		$data = array(
			'title' => 'Monitoring',
			'monitoring' => $this->m->getLaporanKerusakan()
		);

		$this->load->view('admin/monitoring/print', $data);
	}
}
