<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Input Jadwal Penjualan Tiket</title>
	
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/admin/input_jadwal.css">
	
</head>
<body>
	<div class="container">
		<center><h1>Input Jadwal Penjualan Tiket DAMRI</h1></center></br>
		<form>
			<h4>Lokasi Keberangkatan</h4>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputAsal">Asal</label>
					<input type="text" class="form-control" id="inputAsal" placeholder="Asal">
				</div>
				<div class="form-group col-md-6">
					<label for="inputTujuan">Tujuan</label>
					<input type="text" class="form-control" id="inputTujuan" placeholder="Tujuan">
				</div>
			</div>
			<h4>Waktu Keberangkatan</h4>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputTgl">Tanggal Berangkat</label>
					<input type="text" class="form-control" id="inputTgl" placeholder="Tanggal Berangkat">
				</div>
				<div class="form-group col-md-6">
					<label for="inputJm">Jam Berangkat</label>
					<input type="text" class="form-control" id="inputJm" placeholder="Jam Berangkat">
				</div>
			</div>
			<div class="form-row">
				<div class="form-group col-md-6">
					<label for="inputSeat">Seat</label>
					<input type="text" class="form-control" id="inputSeat" placeholder="Seat">
				</div>
				<div class="form-group col-md-6">
					<label for="inputHrg">Harga</label>
					<input type="text" class="form-control" id="inputHrg" placeholder="Harga">
				</div>
			</div>
			<div class="form-row">
				<div class="col-md-6">
					<button type="submit" class="btn btn-danger btn-block">Kembali</button>
				</div>
				<div class="col-md-6">
					<button type="submit" class="btn btn-primary btn-block">Submit</button>
				</div>
			</div>
		</form>
	</div>
</body>
</html>