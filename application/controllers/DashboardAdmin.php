<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardAdmin extends CI_Controller {

	public function __construct(){
		parent::__construct();

		if($this->session->userdata('logged') <> 1){
			redirect('/');
		}

		$this->load->model('Master', 'm');
	}

	public function index()
	{
		$data = array(
			'title' => 'Dashboard',
			'total' => $this->m->totalJumlahAset(),
			'perbaikan' => $this->db->get_where('monitoring', array('is_repair' => '1'))->num_rows(),
			'baik' => $this->m->totalJumlahBaik(),
			'ringan' => $this->m->totalJumlahRusakRingan(),
			'berat' => $this->m->totalJumlahRusakBerat(),
		);

		$this->load->view('layouts/header', $data);
		$this->load->view('layouts/sidebar-admin');
		$this->load->view('admin/dashboard/index');
		$this->load->view('layouts/footer');
	}
}
