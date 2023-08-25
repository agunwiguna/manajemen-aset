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
		$this->db->order_by('a.id', 'desc');
		$data = $this->db->get();

		return $data->result_array();
	}
}
