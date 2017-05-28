<?php
class Model_gallery extends CI_Model {

	function getGallery() {
		$queryGallery = $this->db->get('gallery');
		return $queryGallery->result_array();
	}
	function addGallery($data) {
		$res = $this->db->insert('gallery', $data);
		return $res;
	}

	function delGallery($hapusGallery){
		$this->db->where_in('id_gallery', $hapusGallery);
		$this->db->delete('gallery');
	}
}
?>