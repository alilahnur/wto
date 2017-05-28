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
					<h2>More Gallery</h2>
					<h4>of We Tour Organizer's Client</h4>
					<br>
				</div>
			</div>
			<div class="row">
			<?php foreach ($data as $x) {
					echo '
			<!-- <div class="col-sm-3 col-xs-12 portfolio-item megento">
								<div class="view efffect">
									<div class="portfolio-image">
										<img src="'. base_url($x['patch_gallery']) .'" alt=""></div> 
										<div class="mask text-center">
											<h3>'. $x['judul_gallery'] .'</h3>
											<a href="#"><i class="fa fa-link"></i></a>
											<a href="'. base_url($x['patch_gallery']) .'" data-gallery="prettyPhoto"><i class="fa fa-search-plus"></i></a>
										</div>
									</div>
								</div>
							</div>
				';
				}

				?>
			</div> -->

			<div class="row">
				<?php foreach ($data as $x) {
					echo '
						<div class="col-sm-3 portofolio-item" style="padding-bottom: 20px;">
							<a class="portofolio-link" data-toggle="modal" href="#'.$x['id_gallery'].'">
								<div class="caption">
									<div class="caption-content">
										
										<img class="img-responsive" alt="" src="'. base_url($x['patch_gallery']) .'">
										
									</div>
								</div>
									
							</a>
						</div>
					';
				}

				?>
			</div>
		</div>
	</section>

	<?php foreach ($data as $x) {
		echo '
			<div tabindex="-1" role="dialog" aria-hidden="true"
				class="portofolio-modal modal fade" id="'. $x['id_gallery'] .'">
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
									<h4>'. $x['judul_gallery'] .'</h4>
									<hr class="star-primary">
									<img class="img-responsive img-centered" alt="" src="'. base_url($x['patch_gallery']) .'">
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

	<br>
	<br>
	<div class="container">
	<a href="<?php echo base_url()  ?>"><button>Back</button></a>
	</div>

</body>
</html>