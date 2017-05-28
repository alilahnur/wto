<?php
class Model_artikel extends CI_Model {

	function getArtikel() {
		$queryArtikel = $this->db->get('artikel');
		return $queryArtikel->result_array();
	}
	function addArtikel($data) {
		$res = $this->db->insert('artikel', $data);
		return $res;
	}

	function delartikel($hapusArtikel){
		$this->db->where_in('id_artikel', $hapusArtikel);
		$this->db->delete('artikel');
	}
}
?>