<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Collapsible sidebar using Bootstrap 4</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/admin/input_jadwal.css">
</head>
<div class="container">
<h1>Input Jadwal Penjualan Tiket DAMRI</h1>
<form>

	<h4>Lokasi Keberangkatan</h4>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Asal</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Asal">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Tujuan</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Tujuan">
    </div>
  </div>
  <h4>Waktu Keberangkatan</h4>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Tanggal Berangkat</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Tanggal Berangkat">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Jam Berangkat</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Jam Berangkat">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Seat</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Seat">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Harga</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Harga">
    </div>
  </div>
  <button type="submit" class="btn btn-primary">Sign in</button>
</form>
</div>
</html>