<?php 
class C_home extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Model_admin');
		$this->load->model('Model_paket');
		$this->load->model('Model_artikel');
		$this->load->model('Model_gallery');
		$this->load->model('Model_pesan');
	}
	
	function index(){
		$this->load->view('indexWTO');
	}

	function loadPaket(){
		// $this->load->view('paket');
		$data = $this->Model_paket->getPaket();
		$this->load->view('paket', array('dataPaket' => $data));
	}

	function loadTransportasi(){
		$this->load->view('transportasi');
	}

	function loadGuide(){
		$this->load->view('guide');
	}

	function loadpesan(){
		$this->load->view('listpesan');
	}

	function insertpesan(){
		$name = $this->input->post('name');
		$email = $this->input->post('email');
		$pesan = $this->input->post('message');

		$dataPesan = array(
			'name' => $name,
			'email' => $email,
			'message' => $pesan,
			);

		// $res = 
		$this->Model_pesan->addPesan($dataPesan);
		// if ($res == !NULL) {
		// 	$this->index();
		// 	// echo "<h2>pesan berhasil diinput</h2>";
		// } else{
		// 	echo "<h2>pesan gagal</h2>";
		// }
		// $this->index();
		redirect('C_home');
	}

	function readpesan(){
		$dataPesan = $this->Model_pesan->getPesan();
		$this->load->view('listpesan', array('dataPesan' => $dataPesan));
	}

	function loadartikel(){
		$data = $this->Model_artikel->getArtikel();
		$this->load->view('moreartikel', array('dataArtikel' => $data));
	}

	function loadgallery(){
		$data = $this->Model_gallery->getGallery();
		$this->load->view('moregallery', array('data' => $data));
	}
}
 ?>