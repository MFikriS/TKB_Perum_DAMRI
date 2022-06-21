<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Admin Perum DAMRI</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/admin/home_admin.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>
<body>
	<div class="container">
		<center><h1>Input Jadwal Penjualan Tiket DAMRI</h1></center></br>
		<form id="saveUserForm" method="post">
			<h4>Lokasi Keberangkatan</h4>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputAsal">Asal</label>
					<input type="text" name="asal" class="form-control" id="asal" placeholder="Asal" required>
				</div>
				<div class="form-group col-md-6">
					<label for="inputTujuan">Tujuan</label>
					<input type="text" name="tujuan" class="form-control" id="tujuan" placeholder="Tujuan" required>
				</div>
			</div>
			<h4>Waktu Keberangkatan</h4>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputTgl">Tanggal Berangkat</label>
					<input type="text" name="tgl" class="form-control" id="tgl" placeholder="Tanggal Berangkat" required>
				</div>
				<div class="form-group col-md-6">
					<label for="inputJm">Jam Berangkat</label>
					<input type="text" name="jm" class="form-control" id="jm" placeholder="Jam Berangkat" required>
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputSeat">Seat</label>
					<input type="text" name="seat" class="form-control" id="seat" placeholder="Seat" required>
				</div>
				<div class="form-group col-md-6">
					<label for="inputHrg">Harga</label>
					<input type="text" name="hrg" class="form-control" id="hrg" placeholder="Harga" required>
				</div>
			</div>
				<button type="submit" id="simpan" class="btn btn-primary btn-block">Submit</button>
		</form>
	</div>
	
	<!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
	<script type="text/javascript" src="<?php echo base_url() . 'assets/js/crud_operation.js' ?>"></script>
</body>
</html>