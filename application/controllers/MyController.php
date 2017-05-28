<?php 
class MyController extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('My_Model');
	}
	
	// function homepage(){
	// 	$this->load->view('homepage', $data);
	// }

	function index() {
		$data['err_message'] = "";
		$this->load->view('loginAdmin', $data);
	}

	function login(){
		$username = $this->input->post('username'); 
		$password = $this->input->post('password'); 
		$isLogin = $this->My_Model->login_authen($username, $password); 
		 $i = $this->My_Model->authen_user($username); 
		 
		if ($isLogin == true) { 
		  $this->home(); 
		} else{ 
			$data['err_message'] = "Login Admin gagal :("; 
			$this->load->view('dashboardAdmin', $data); 
		} 
	}

	function home(){
		$this->load->view('loginAdmin'); 
	}

}
 ?>