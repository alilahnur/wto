<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin We Tour Organizer</title>
		<meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link rel="shortcut icon" href="assets/images/ico/logoWe.jpg"> 
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/images/ico/logoWe.jpg"> 
	<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/images/ico/logoWe.jpg"> 
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/images/ico/logoWe.jpg"> 
	<link rel="apple-touch-icon-precomposed" href="assets/images/ico/logoWe.jpg">
</head>
<body>
	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
	    <div class="navbar-header">
	      <a class="navbar-brand" href="<?php echo site_url('admin/c_admin/dashboardawl')?>">Dashboard Admin</a>
	    </div>
	    <br>
	    <br>
	    <ul class="nav navbar-nav">
	      <li class="active"><a href="<?php echo site_url('admin/c_admin/dashboardawl')?>">Dashboard</a></li>
	      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Paket<span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo site_url('admin/c_admin/tabelpaket')?>">List Paket</a></li>
	          <li><a href="<?php echo site_url('admin/c_admin/tmbhpaket')?>">Tambah Paket</a></li>
	        </ul>
	      </li>
	      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Artikel<span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo site_url('admin/c_admin/tabelartikel')?>">List Artikel</a></li>
	          <li><a href="<?php echo site_url('admin/c_admin/tmbhartikel')?>">Tambah Artikel</a></li>
	        </ul>
	      </li>
	      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Gallery<span class="caret"></span></a>
	        <ul class="dropdown-menu">
	          <li><a href="<?php echo site_url('admin/c_admin/tabelfoto')?>">List Foto</a></li>
	          <li><a href="<?php echo site_url('admin/c_admin/tmbhfoto')?>">Tambah Foto</a></li>
	        </ul>
	      </li>
	      <li><a href="<?php echo site_url('admin/c_admin/tabelpesan')?>">Pesan</a></li>
	    </ul>
	    <ul class="nav navbar-nav navbar-right">
	    	<li class="dropdown"><a class="dropdown-toggle glyphicon glyphicon-user" data-toggle="dropdown" href="#"> Admin We Tour<span class="caret"></span></a>
		        <ul class="dropdown-menu">
		          <li><a href="#">Profil</a></li>
		          <li><a href="#">Logout</a></li>
		        </ul>
	      	</li>
	    </ul>

	  </div>
	</nav>
	
	<div id="tambahpaket" class="container">
		<?php echo validation_errors(); ?>

	<!-- <!?php echo form_open_multipart('admin/c_admin/insertpaket'); ?> -->
		<table>
			<form action="<?php echo site_url("admin/c_admin/updatePaket/".$dataPkt['id_paket']) ?>" method="post" enctype="multipart/form-data">
			
			<!-- helper form, referensi :
			// https://www.codeigniter.com/userguide3/helpers/form_helper.html-->

			<h1>Update Paket</h1>
			<br>
			<table >
				<tr>
					<div>
						<label class="form-group">Judul Paket </label>
						<br>
						<input type="text" name="judul_paket" row="1" value="<?php echo $dataPkt['judul_paket'];?>">
					</div>
				</tr>

				<tr>
				<div>
					<label class="form-group" for="deskripsi_paket">Deskripsi Paket :</label>
					<br>
					<!-- <input style="width: 100%; height: 500%; table-layout: fixed;" type="textarea" name="deskripsi_paket" value="<?php echo $dataPkt['deskripsi_paket'];?>" class="col-md-0"> -->
					<textarea name="deskripsi_paket" style="width: 1000px; height: 300px; word-wrap: break-word;" value=""><?php echo $dataPkt['deskripsi_paket'];?></textarea>
				</div>
				</tr>

				<tr>
					<div class="form-group">
						<label>Harga Paket :</label>
						<br>
						<input type="text" name="harga_paket" value="<?php echo $dataPkt['harga_paket'] ;?>">
					</div>
				</tr>

				<tr>
					<div class="form-group">
						<label>Gambar :</label>
						<input type="file" name="image" value="">
						<span>
							<img src="<?php echo base_url(). $dataPkt['patch_paket']; ?>">

						</span>
					</div>
				</tr>
			</table>
			<br>

			<div class="form-group">
				<input type="hidden" name="is_submit" value="1">
				<td colspan="2">
					<input type="submit" name="submit" value="SIMPAN">
				</td>
			</div>
			
		</table>

	 <!-- <!php echo form_close(); ?><br> -->
	</form>
	<!-- <a href="<!?php echo site_url('read')  ?>"><button>Read</button></a>  -->
	</div>
</body>
</html>