<?php
class My_Model extends CI_Model {

	function login_authen($username, $password){
		$this->db->select('*'); 
		$this->db->where('username', $username); 
		$this->db->where('password', $password); 
		$this->db->from('admin'); 
		 
		$query = $this->db->get(); 
		 
		if ($query->num_rows() == 1) { 
		  return true; 
		} 
		else{ 
		  return false; 
		} 
	}

	function authen_user($username){
		// $this->db->select('authentication'); 
		$this->db->where('username', $username); 
		$this->db->from('admin'); 
		$query = $this->db->get(); 
		return $query->result_array(); 
	}

	function wrong_password($username, $value){ //wrong_password ini buat ngecek password yang diinputkan itu benar atau enggak, tapi dicocokkan sama jumlah authenticationnya itu uda berapa kali, kalo yang ke 4 itu masih gagal maka akun terblock, kalo yang ke 4 bener maka akun bisa digunakan.
		$this->db->set('authentication', $value); 
		$this->db->where("username", $username);
		$this->db->update('admin'); 
	}

}
?>