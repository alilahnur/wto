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

<style type="text/css">

table, th, td {
	border: 1px solid black;
    border-collapse: collapse;
}

th, td {
    padding: 5px;
}
</style>

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
		          <li><a href="<?php echo site_url('admin/login/logout')?>">Logout</a></li>
		        </ul>
	      	</li>
	    </ul>

	  </div>
	</nav>

	<div class="col-lg-12">
	<div class="container-fluid">
	<h1>List Pesan</h1>
		<div class="table-responsive">
		<table style="width: 100%; table-layout: fixed;">
				<thead>
					<td style="width: 5%">  </td>
					<td style="width: 5%">Id Pesan</td>
					<td style="width: 10%">Nama</td>
					<td>Email</td>
					<td>Pesan</td>
				</thead>
				<?php echo form_open(site_url('admin/c_admin/deletepesan')); ?>
				<tbody>
				<?php foreach($dataPesan as $x) { ?>
					<tr>
					<td><input type="checkbox" name="pesan[]" value="<?php echo $x['id_pesan']?>"></td>
					<td><?= $x['id_pesan'] ?></td>
					<td><?= $x['name'] ?></td>
					<td><?= $x['email'] ?></td>
					<td style="text-align: left; word-wrap: break-word;"><?= $x['message'] ?></td>
					</tr>
				<?php } ?>
				</tbody>
			</table><br><br>
			<input type="submit" value="Delete">
			<?php echo form_close(); ?>
			<!-- <a href="<?php echo site_url('tambah') ?>"><button>Back</button></a> -->
		</div>
	</div>
	</div>
</body>
</html>