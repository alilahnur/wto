<?php 
class C_admin extends CI_Controller {
	public function __construct() {
		parent::__construct();
		if (! $this->session->userdata('username')) {
			redirect(base_url());
		}
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

	// function login(){
	// 	$username = $this->input->POST('username'); 
	// 	$password = $this->input->POST('password'); 
	// 	$isLogin = $this->Model_admin->login_authen($username, $password); 
	// 	 $i = $this->Model_admin->authen_user($username); 
		 
	// 	if ($isLogin == true) { 
	// 		$sess_data['username'] = $username;
	// 		$this->session->set_userdata($sess_data);
		  	
	// 	  	$this->load->view('cobaadmin'); 
	// 	} else{ 
	// 		$data['err_message'] = "Login Admin gagal :("; 
	// 		$this->load->view('/admin/loginAdmin', $data); 
	// 	}
	// 	//$this->load->view('cobaadmin');
	// }

	// function logout(){
	// 	$this->session->sess_destroy();
	// 	$this->index();
	// }

	function dashboard(){
		$this->load->view('cobaadmin');
	}

	function tmbhpaket(){
		$this->load->view('tambahpaket');
	}

	function tmbhartikel(){
		$this->load->view('tambahartikel');	
	}

	function tmbhfoto(){
		$this->load->view('tambahfoto');
	}

	function dashboardawl(){
		$this->load->view('dashboardawal');
	}

	function tabelpaket(){
		//$dataPaket = $this->Model_paket->getPaket();
		//$this->load->view('listpaket',$dataPaket);
		$data = $this->Model_paket->getPaket();
		$this->load->view('listpaket', array('dataPaket' => $data));
		
	}

	function tabelartikel(){
		$dataArtikel = $this->Model_artikel->getArtikel();
		$this->load->view('listartikel', array('dataArtikel' => $dataArtikel));
	}

	function tabelfoto(){
		$data = $this->Model_gallery->getGallery();
		$this->load->view('listfoto', array('data' => $data));
	}

	function tabelpesan(){
		$dataPesan = $this->Model_pesan->getPesan();
		$this->load->view('listpesan', array('dataPesan' =>$dataPesan));
	}

	function insertpaket(){
		// $configGbr = $this->upload->data();
		// $patchPaket = $configGbr['file_name'];

		// $id_paket = $_POST['id_paket'];
		$judul_paket = $_POST['judul_paket'];
		$deskripsi_paket = $_POST['deskripsi_paket'];
		$harga_paket = $_POST['harga_paket'];

		$type = explode('.', $_FILES['image']['name']);
		$type = $type[count($type)-1];
		$newName = uniqid(rand()).'.'.$type;		
		$config['upload_path'] = './fotopaket/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name'] = $newName;
		// $config['max_width'] = 500;
		// $config['max_height'] = 1024;
		// $config['max_size'] = 1024;
		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$foto = array('upload_data'=> $this->upload->data());

		$data = array(
			// 'id_paket' => $id_paket,
			'judul_paket' => $judul_paket,
			'deskripsi_paket' => $deskripsi_paket,
			'harga_paket' => $harga_paket,
			'patch_paket' => '/fotopaket/'.$newName
			);

		$this->Model_paket->addPaket($data);
		$this->tmbhpaket();
	}

	function editPaket($id_paket){
		$paket = $this->Model_paket->getpkt($id_paket);
		$dataPkt = array(
			'id_paket' => $paket[0]['id_paket'],
			'judul_paket' => $paket[0]['judul_paket'],
			'deskripsi_paket' => $paket[0]['deskripsi_paket'],
			'harga_paket' => $paket[0]['harga_paket'],
			'patch_paket' => $paket[0]['patch_paket']
			);
		$this->load->view('updatepaket', array( 'dataPkt'=> $dataPkt) );
	}

	function updatePaket($id_paket){
		// $pkt = $this->Model_paket->getpkt($id_paket);
		// $dataPkt = array(
		// 	'$id_paket' => $pkt[0]['id_paket'],
		// 	// 'judul_paket' => $_GET['judul_paket'],
		// 	// 'deskripsi_paket' => $_GET['deskripsi_paket'],
		// 	// 'harga_paket' => $_GET['harga_paket'],
		// 	// 'patch_paket' => $_GET['patch_paket']
		// 	);
		// $id_paket = $_POST['id_paket'];
		$judul_paket = $_POST['judul_paket'];
		$deskripsi_paket = $_POST['deskripsi_paket'];
		$harga_paket = $_POST['harga_paket'];

		$type = explode('.', $_FILES['image']['name']);
		$type = $type[count($type)-1];
		$newNameUpload = uniqid(rand()).'.'.$type;
		$config['upload_path'] = './fotopaket/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name'] = $newNameUpload;

		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$fotoUpload = array('upload_data' => $this->upload->data());

		$data_updatepkt = array(
			'judul_paket' => $judul_paket,
			'deskripsi_paket' => $deskripsi_paket,
			'harga_paket' => $harga_paket,
			'patch_paket' => '/fotopaket/'.$newNameUpload
			);

		// $where = array(
		// 	'id_paket' => $id_paket
		// 	);
		// $res = 
		$this->Model_paket->updatePaket($data_updatepkt, $id_paket);
		// if ($res >= 1) {
		// 	var_dump($id_paket);
			//redirect('C_admin/tabelpaket');
		$this->tabelpaket();
		// } else{
		// 	echo ("update gagal :(, cobalagi ya");
		// }
	}

	function insertartikel(){
		$judul_artikel = $_POST['judul_artikel'];
		$pengantar_artikel = $_POST['pengantar_artikel'];
		$deskripsi_artikel = $_POST['deskripsi_artikel'];

		$type = explode('.', $_FILES['image']['name']);
		$type = $type[count($type)-1];
		$newNameArtikel = uniqid(rand()).'.'.$type;		
		$config['upload_path'] = './fotoartikel/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name'] = $newNameArtikel;

		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$foto = array('upload_data'=> $this->upload->data());

		$data = array(
			'judul_artikel' => $judul_artikel,
			'pengantar_artikel' => $pengantar_artikel,
			'deskripsi_artikel' => $deskripsi_artikel,
			'patch_artikel' => '/fotoartikel/'.$newNameArtikel
			);

		$this->Model_artikel->addArtikel($data);
		$this->tmbhartikel();
	}

	function insertfoto(){
		$judul_gallery = $_POST['judul_gallery'];

		$type = explode('.', $_FILES['image']['name']);
		$type = $type[count($type)-1];
		$newNameGal = uniqid(rand()).'.'.$type;		
		$config['upload_path'] = './fotogallery/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['file_name'] = $newNameGal;

		$this->load->library('upload', $config);
		$this->upload->do_upload('image');
		$fotogallery = array('upload_data'=> $this->upload->data());

		$data = array(
			'judul_gallery' => $judul_gallery,
			'patch_gallery' => '/fotogallery/'.$newNameGal
			);

		$this->Model_gallery->addGallery($data);
		$this->tmbhfoto();
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

		$res = $this->Model_pesan->addPesan($dataPesan);
		if ($res == !NULL) {
			echo "<h2>pesan berhasil diinput</h2>";
		} else{
			echo "<h2>pesan gagal</h2>";
		}
		$this->load->view('base_url()');
	}


	function deletepaket(){
		$deletePkt = $this->input->post('paket');
		$this->Model_paket->delPaket($deletePkt);
			echo '<script language="javascript">';
			echo 'alert("YAKIN MAU HAPUS PAKET?"); ';
			echo 'window.history.go(-1);';
			echo '</script>';
		$this->tabelpaket();
	}

	function deletepesan(){
		$deletePsn = $this->input->post('pesan');
		$this->Model_pesan->delpesan($deletePsn);
		echo "Hapus pesan berhasil :))";
		$this->tabelpesan();
	}

	function deleteartikel(){
		$deleteArtkl = $this->input->post('artikel');
		$this->Model_artikel->delartikel($deleteArtkl);
		echo "Hapus artikel berhasil :)";
		$this->tabelartikel();
	}

	function deletegallery(){
		$deleteGal = $this->input->post('gallery');
		$this->Model_gallery->delGallery($deleteGal);
		echo "Hapus gallery berhasil";
		$this->tabelfoto();
	}

	function loadupdatepaket(){
		$this->load->view('updatepaket');
	}

	function readDataPaket(){
		$dtpaket = $this->Model_paket->getDataPaket("WHERE id_paket '".$id_paket ."'");
		$dataPaket = array(
			'judul_paket' => $dtpaket[0]['judul_paket'],
			'deskripsi_paket' => $dtpaket[0]['deskripsi_paket'],
			'patch_paket' => $dtpaket[0]['patch_paket']
			);
		$this->load->view('updatepaket', $dataPaket);
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