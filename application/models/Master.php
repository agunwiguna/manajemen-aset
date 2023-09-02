<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Master extends CI_Model {

	function getAllDataDesc($table, $id){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($id, 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}

	function getAllDataAsc($table, $id){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->order_by($id, 'asc');
		$data = $this->db->get();

		return $data->result_array();
	}

	function getDetailData($table, $column, $id){
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where($column, $id);
		$data = $this->db->get();

		return $data->row_array();
	}

	function insertData($table, $data){
		return $this->db->insert($table, $data);
	}

	function updateData($column, $id, $table, $data){
		$this->db->where($column, $id);
		$result = $this->db->update($table, $data);
		return $result;
	}

	function deleteData($column, $id, $table){
		$this->db->where($column, $id);
		$result = $this->db->delete($table);
		return $result;
	}

	//Aset
	function getAllDataAset(){
		$this->db->select('a.*, b.nama as nama_ruangan');
		$this->db->from('aset a');
		$this->db->join('ruangan b', 'b.id = a.ruangan_id');
		$this->db->where('a.is_active', '1');
		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}

	function getDetailDataAset($id){
		$this->db->select('a.*, b.nama as nama_ruangan');
		$this->db->from('aset a');
		$this->db->join('ruangan b', 'b.id = a.ruangan_id');
		$this->db->where('a.id', $id);
		$data = $this->db->get();

		return $data->row_array();
	}

	function getAllDataAsetByRuangan($id){
		$this->db->select('a.*, b.nama as nama_ruangan');
		$this->db->from('aset a');
		$this->db->join('ruangan b', 'b.id = a.ruangan_id');
		$this->db->where('a.ruangan_id', $id);
		$this->db->where('a.is_active', '1');
		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}

	//perbaikan
	function getAllDataPerbaikan(){
		$this->db->select('a.*, b.kode_aset, b.nama_barang, b.merek, b.kondisi, b.tahun_perolehan, b.jumlah, c.nama as nama_ruangan');
		$this->db->from('perbaikan a');
		$this->db->join('aset b', 'b.id = a.aset_id');
		$this->db->join('ruangan c', 'c.id = b.ruangan_id');
		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}

	function getDetailDataPerbaikan($id){
		$this->db->select('a.*, b.id as aset_id, b.kode_aset, b.nama_barang, b.merek, b.kondisi, b.tahun_perolehan, b.jumlah, c.nama as nama_ruangan');
		$this->db->from('perbaikan a');
		$this->db->join('aset b', 'b.id = a.aset_id');
		$this->db->join('ruangan c', 'c.id = b.ruangan_id');
		$this->db->where('a.id', $id);
		$data = $this->db->get();

		return $data->row_array();
	}

	function getLaporanDataPerbaikan(){
		$this->db->select('a.*, b.kode_aset, b.nama_barang, b.merek, b.kondisi, b.tahun_perolehan, b.jumlah, c.nama as nama_ruangan');
		$this->db->from('perbaikan a');
		$this->db->join('aset b', 'b.id = a.aset_id');
		$this->db->join('ruangan c', 'c.id = b.ruangan_id');
		$this->db->where('a.status', 'Selesai');
		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}

	function getAllDataMonitoring(){
		$this->db->select('a.*, b.id as aset_id, b.kode_aset, b.nama_barang, b.merek, b.jumlah, c.nama as nama_ruangan');
		$this->db->from('monitoring a');
		$this->db->join('aset b', 'b.id = a.aset_id');
		$this->db->join('ruangan c', 'c.id = b.ruangan_id');

		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}

	function getDetailDataMonitoring(){
		$this->db->select('a.*, b.kode_aset, b.nama_barang, b.merek, b.kondisi, b.tahun_perolehan, b.jumlah, b.gambar, c.nama as nama_ruangan');
		$this->db->from('monitoring a');
		$this->db->join('aset b', 'b.id = a.aset_id');
		$this->db->join('ruangan c', 'c.id = b.ruangan_id');

		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->row_array();
	}

	function getLaporan(){
		$this->db->select('a.*, b.kode_aset, b.nama_barang, b.merek, c.nama as nama_ruangan');
		$this->db->from('monitoring a');
		$this->db->join('aset b', 'b.id = a.aset_id');
		$this->db->join('ruangan c', 'c.id = b.ruangan_id');
		$this->db->where('status', '1');

		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}

	function totalJumlahAset(){
		$this->db->select('SUM(jumlah) as total_aset');
		$this->db->from('aset');
		$this->db->where('is_active', '1');
		$data = $this->db->get();

		return $data->row();
	}

	function totalJumlahPerbaikan(){
		$this->db->select('SUM(jumlah_perbaikan) as total_perbaikan');
		$this->db->from('perbaikan');
		$data = $this->db->get();

		return $data->row();
	}

	function totalJumlahBaik(){
		$this->db->select('SUM(jumlah) as total_baik');
		$this->db->from('aset');
		$this->db->where('kondisi', 'Baik');
		$this->db->where('is_active', '1');
		$data = $this->db->get();

		return $data->row();
	}

	function totalJumlahRusakRingan(){
		$this->db->select('SUM(jumlah) as total_ringan');
		$this->db->from('aset');
		$this->db->where('kondisi', 'Rusak Ringan');
		$this->db->where('is_active', '1');
		$data = $this->db->get();

		return $data->row();
	}

	function totalJumlahRusakBerat(){
		$this->db->select('SUM(jumlah) as total_berat');
		$this->db->from('aset');
		$this->db->where('kondisi', 'Rusak Berat');
		$this->db->where('is_active', '1');
		$data = $this->db->get();

		return $data->row();
	}

	function getLaporanPerbaikan(){
		$this->db->select('a.*, b.id as aset_id, b.kode_aset, b.nama_barang, b.merek, b.jumlah, b.kondisi, b.tahun_perolehan, b.gambar, c.nama as nama_ruangan');
		$this->db->from('monitoring a');
		$this->db->join('aset b', 'b.id = a.aset_id');
		$this->db->join('ruangan c', 'c.id = b.ruangan_id');
		$this->db->where('a.is_repair', '1');

		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}

	function getLaporanKerusakan(){
		$this->db->select('a.*, b.id as aset_id, b.kode_aset, b.nama_barang, b.merek, b.jumlah, b.kondisi, b.tahun_perolehan, b.gambar, c.nama as nama_ruangan');
		$this->db->from('monitoring a');
		$this->db->join('aset b', 'b.id = a.aset_id');
		$this->db->join('ruangan c', 'c.id = b.ruangan_id');
		$this->db->where('a.status', '1');

		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}
}
