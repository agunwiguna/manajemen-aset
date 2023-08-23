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
}
