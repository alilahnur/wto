<?php
class Model_pesan extends CI_Model {

	function getPesan() {
		$query = $this->db->get('pesan');
		return $query->result_array();
	}
	function addPesan($dataPesan) {
		$res = $this->db->insert('pesan', $dataPesan);
		return $res;
	}

	function delpesan($hapusPesan){
		$this->db->where_in('id_pesan', $hapusPesan);
		$this->db->delete('pesan');
	}
}
?>