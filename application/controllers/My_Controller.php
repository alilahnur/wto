<?php 
class My_Controller extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
	}
	
	function index() {
		$data['err_message'] = "";
		$this->load->view('login', $data);
	}

	function login(){
		$username = $this->input->post('username'); 
		$password = $this->input->post('pass'); 
		$isLogin = $this->My_Model->login_authen($username, $password); 
		$i = $this->My_Model->authen_user($username); 
		 
		if ($isLogin == true) { 
		  $this->home(); 
		} else{ 
					$data['err_message'] = "AKUN ANDA TERBLOCK"; 
		  			$this->load->view('login', $data); 
		} 
	}

	function home(){
		$this->load->view('home'); 
	}

}
 ?>