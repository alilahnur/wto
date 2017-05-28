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
	<h1>List Paket</h1>
		<div class="table-responsive">
		<table style="width: 100%;">
				<thead>
					<td>  </td>
					<td>Id Paket</td>
					<td>Judul Paket</td>
					<td>Deskripsi Paket</td>
					<td>Harga Paket</td>
					<td>Gambar</td>
					<td>Action</td>
				</thead>
				<?php echo form_open(site_url('admin/c_admin/deletepaket')); ?>
				<tbody>
				<?php foreach($dataPaket as $x) { ?>
					<tr>
					<td><input type="checkbox" name="paket[]" value="<?php echo $x['id_paket']?>"></td>
					<td><?php echo $x['id_paket'] ?></td>
					<td><?php echo $x['judul_paket'] ?></td>
					<td><?php echo $x['deskripsi_paket'] ?></td>
					<td><?php echo $x['harga_paket'] ?></td>
					<td style="text-align: center;" style="width: 50%;"><img src="<?php echo base_url($x['patch_paket']);?>"  style="height: 100px;"></td>
					<td>
						<button type="button" class="btn btn-info btn-lg">
							<a href="<?php echo site_url('admin/c_admin/editPaket/'.$x['id_paket'])?>">edit</a>
						</button>
						
					</td>
					</tr>
				<?php } ?>
				</tbody>
			</table><br><br>
			<input type="submit" value="Delete">
			<?php echo form_close(); ?>
			<a href="<?php echo site_url('tambah') ?>"><button>Back</button></a>
		</div>
	</div>
</div>
	<!-- <script type="text/javascript">
		$('#exampleModal').on('show.bs.modal', function (event) {
		  var button = $(event.relatedTarget) // Button that triggered the modal
		  var recipient = button.data('whatever') // Extract info from data-* attributes
		  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
		  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
		  var modal = $(this)
		  modal.find('.modal-title').text('New message to ' + recipient)
		  modal.find('.modal-body input').val(recipient)
	})
	</script> -->


	<nav>
	  <ul class="pagination">
	    <li class="disabled">
	      <span>
	        <span aria-hidden="true">&laquo;</span>
	      </span>
	    </li>
	    <li class="active">
	      <span>1 <span class="sr-only">(current)</span></span>
	    </li>
	    ...
	  </ul>
	</nav>

</body>
</html>