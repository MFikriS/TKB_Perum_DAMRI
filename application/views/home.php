<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Ticketing DAMRI</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/home.css">
</head>
<body>
	<div class="container">
		<div class="row justify-content-start">
			<div class="card text-white bg-primary">
			<center><div class="card-header" style="font-weight: bold; font-size: 1.8em;">Website Admin Perum DAMRI</div></center>
				<div class="card-body">
					<center><h5 class="card-title">Login Admin</h5></center>
					<form class="form-signin" action="<?php echo base_url('admin_login'); ?>" method="post">
					<?php if ($this->session->flashdata('gagal')) { ?>
							<div class="alert alert-success"> <?= $this->session->flashdata('gagal') ?> </div>
						<?php } ?>
						<label for="username" style="padding-top:13px">&nbsp;Username</label>
							<input type="text" id="username" name="username" class="form-control" placeholder="Masukkan username disini" required autofocus><br/>
						<label for="password">Password</label>
							<input type="password" id="password" name="password" class="form-control" placeholder="Masukkan password disini" required></br>
							<button type="submit" class="btn btn-success btn-block">Login</button>
						<center><font size="4px" weight="bold">&copyMFikriS 2022</font></center>
					</form>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Javascript -->
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>