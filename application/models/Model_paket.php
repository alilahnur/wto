<?php
class Model_paket extends CI_Model {

	function getPaket() {
		$query = $this->db->get('paket');
		return $query->result_array();
	}

	function getpkt($id_paket){
		$sql = $this->db->get_where('paket', array('id_paket' => $id_paket) );
		// $data = $this->db->query($sql);
		return $sql->result_array();
	}

	function addPaket($data) {
		$res = $this->db->insert('paket', $data);
		return $res;
	}

	function delPaket($hapusPaket){
		$this->db->where_in('id_paket', $hapusPaket);
		$this->db->delete('paket');
	}

	function getDataPaket($id_paket){
		$dataPaket = $this->db->query('SELECT * FROM paket '.$id_paket);
		return $dataPaket->result_array();
	}

	function updtPaket($id_paket, $dtpaket){
		$this->db->set('judul_paket', $dtpaket);
		$this->db->where('id_paket', $id_paket);
		$this->db->update('paket');
	}

	//buat update data
	public function updatePaket($data, $where){
		$this->db->where('id_paket', $where);
		$this->db->update('paket', $data);
		// $res=$this->db->update('paket', $data, $where);
		// return $res;
	}
}
?>