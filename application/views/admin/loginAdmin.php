<!DOCTYPE html>
<html>
<head>
	<title>Login Admin</title>
	<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro|Open+Sans+Condensed:300|Raleway' rel='stylesheet' type='text/css'>
	<style type="text/css">
	table{
	position: absolute;
	height: 50px;
	top: 25%;
	left: 50%;
	margin: -100px 0 0 -150px;
	}

	#main{
	width:450px;
	margin:50px auto;
	font-family:raleway;
	text-align: center;
	vertical-align: center;
	justify-content: center;
	}

	#login{
	width:300px;
	float: left;
	border-radius: 10px;
	font-family:raleway;
	border: 2px solid #ccc;
	padding: 5px 35px 5px;
	margin-top: 70px;
	}

	</style>
</head>
<body style="background-image: <?php echo base_url()."assets/hehe.jpg"?>">
	<div id="main">
		<div id="login">
			<form method="post" action="<?php echo site_url('admin/login/login')?>">
				<table style="padding-top: 200px; margin-right: : 150px;">
					<tr>
						<h2 align="center">Halaman Login Admin</h2>
					</tr>

					<tr>
						<td>Username</td>
						<td>
							<!-- <span class="fontawesome-user"></span> -->
							<input type="text" name="username" placeholder="username" style="">
						</td>
					</tr>

					<tr>
						<td>Password</td>
						<td><input type="password" name="pass" placeholder="password"></td>
					</tr>
					<tr>
						<td></td>
						<td style="align-content: center; border: 2px solid #ccc; background-color: #cc6600;"><input type="submit" value="LOGIN" style="background-color:#ff8000;"></td>
					</tr>
					<tr>
						<td colspan="2"><?php echo $err_message;?></td>
					</tr>
				</table>
			</form>
		</div>
	</div>
</body>