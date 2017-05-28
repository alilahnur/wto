<?php 
class Login extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_admin');
		$this->load->model('Model_paket');
		$this->load->model('Model_artikel');
		$this->load->model('Model_gallery');
		$this->load->model('Model_pesan');
		$this->load->helper(array('form', 'url', 'file'));
	}
	
	function index() {
		$data['err_message'] = "";
		$this->load->view('/admin/loginAdmin', $data);
	}

	function login(){
		$username = $this->input->POST('username'); 
		$password = $this->input->POST('pass'); 
		$isLogin = $this->Model_admin->login_authen($username, $password); 
		 //$i = $this->Model_admin->authen_user($username); 
		 
		if ($isLogin == true) { 
			$sess_data['username'] = $username;
			$this->session->set_userdata($sess_data);
		  	$this->load->view('cobaadmin'); 
		} else{ 
			//echo $username."-".$password;
			$data['err_message'] = "Login Admin gagal :("; 
			//$this->load->view('/admin/loginAdmin', $data); 
			$this->index();//load->view('cobaadmin'); 
		}
		//$this->load->view('cobaadmin');
	}

	function logout(){
		$this->session->sess_destroy();
		$this->index();
	}

}
