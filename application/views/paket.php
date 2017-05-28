<!DOCTYPE html>
<html lang="en">
<head> 
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
	<meta name="description" content="Creative One Page Parallax Template">
	<meta name="keywords" content="Creative, Onepage, Parallax, HTML5, Bootstrap, Popular, custom, personal, portfolio" /> 
	<meta name="author" content=""> 
	<title>We Tour Organizer Official Website</title>  
	<!--[if lt IE 9]> <script src="js/html5shiv.js"></script> 
	<script src="js/respond.min.js"></script> <![endif]--> 
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head><!--/head-->
<body>
	<section class="success" id="portofolio">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<h2>List Paket</h2>
					<p>Paket yang dimiliki oleh We Tour Organizer <strong>Avaliable</strong> <strong>Now</strong></p>
					<br>
				</div>
			</div>

			<div class="container">
			<a href="<?php echo base_url()  ?>"><button>Back</button></a>
			</div>

			<div class="row">
				<?php foreach ($dataPaket as $x) {
					echo '
						<div class="col-sm-3 portofolio-item" style="width: 25%; padding: 40px;">
							<a class="portofolio-link" data-toggle="modal" href="#'.$x['id_paket'].'">
								<div class="caption">
									<div class="caption-content">
										<img class="img-responsive" alt="" src="'. base_url($x['patch_paket']) .'">
										
										
									</div>
										<h3 style="text-align:center">'. $x['judul_paket'] .'</h3>
								</div>
									
							</a>
						</div>
					';
				}

				?>
			</div>
		</div>
	</section>

	<?php foreach ($dataPaket as $x) {
		echo '
			<div tabindex="-1" role="dialog" aria-hidden="true"
				class="portofolio-modal modal fade" id="'. $x['id_paket'] .'">
				<div class="modal-content">
					<div class="close-modal" data-dismiss="modal">
						<div class="lr">
							<div class="rl">
							</div>
						</div>
					</div>

					<div class="container">
						<div class="row">
							<div class="col-lg-8 col-lg-offset-2">
								<div class="modal-body">
									<h2>'. $x['judul_paket'] .'</h2>
									<hr class="star-primary">
									<img class="img-responsive img-centered" alt="" src="'. base_url($x['patch_paket']) .'">
									<p>'. $x['deskripsi_paket'] .'</p>
									<p>Untuk Pemesanan paket. Silahkan menghubungi kami di : 0858 1112 4343 (Call / Whatsapp) </p>
									<p>'. $x['harga_paket'].'</p>
									<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		';
	}

	?>

</body>
</html>