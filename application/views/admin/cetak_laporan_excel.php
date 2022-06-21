<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Jadwal Penjualan Tiket DAMRI</title>

    <!-- Bootstrap CSS CDN -->
	
   <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/jquery.dataTables.css'?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assets/css/admin/home_admin.css">

    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

</head>


<div class="table-responsive">
			<table class="table table-bordered">
				<thead>
					<tr>
						<th class="text-center">No</th>
						<th>ID</th>
						<th>Jenis</th>
						<th>Nama</th>
						<th>Harga</th>
						<th>Stok</th>
						<th>Deskripsi</th>
						<th>Gambar</th>
						<th colspan="3" class="text-center"><span class="glyphicon glyphicon-cog">Opsi</span></th>
					</tr>
					<?php 
						$no = 1;
						foreach($bunga as $b){ 
					?>
					<tr>
						<td class="align-middle text-center"><?php echo $no++ ?></td>
						<td class="align-middle"><?php echo $b['Id_Bunga'] ?></td>
						<td class="align-middle"><?php echo $b['Jenis_Bunga'] ?></td>
						<td class="align-middle"><?php echo $b['Nama_Bunga'] ?></td>
						<td class="align-middle"><?php echo $b['Harga'] ?></td>
						<td class="align-middle"><?php echo $b['Stok'] ?></td>
						<td width="800px" class="align-middle"><?php echo $b['Deskripsi'] ?></td>
						<td class="align-middle"><?php echo '<img src="' . base_url().'assets/upload/bunga/' . $b['Gambar'] . '"  height="200" width="200"/>'; ?></td>
						<td class="align-middle text-center">   
							<a 
                            href="javascript:;"
                            data-id="<?php echo $b['Id_Bunga'] ?>"
                            data-jenis="<?php echo $b['Jenis_Bunga'] ?>"
                            data-nama="<?php echo $b['Nama_Bunga'] ?>"
                            data-harga="<?php echo $b['Harga'] ?>"
                            data-gmbr="<?php echo $b['Gambar'] ?>"
                            data-stok="<?php echo $b['Stok'] ?>"
                            data-deskripsi="<?php echo $b['Deskripsi'] ?>"
                            data-toggle="modal" data-target="#edit-data">
                            <button  data-toggle="modal" data-target="#ubah-data" class="btn btn-primary">Edit</button>
                        </a>
						</td>
						<td class="align-middle text-center">   
							<a href="<?php echo site_url('admin_bunga/edit_gambar/'.$b['Id_Bunga']) ?>" class="btn btn-primary"><span class="glyphicon glyphicon-pencil">Edit Gambar</span></a>
						</td>
						<td class="align-middle text-center">   
							<a onclick="deleteConfirm('<?php echo site_url('admin_bunga/hapus/'.$b['Id_Bunga']) ?>')" href="#" class="btn btn-primary"><span class="glyphicon glyphicon-trash">Hapus</a>
						</td>						
					</tr>
					<?php } ?>
				</thead>
			</table>
		</div>

<body>
<?php
	header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan Jadwal Penjualan Tiket DAMRI.xls");
?>	
		<center><h1>Perum DAMRI</h1>
			<table style="float: right;" border="1" cellpadding="2" cellspacing="0" class="table table-bordered">
				<tbody>
					<center><h1>Laporan Jadwal Penjualan Tiket</h1></center>
					<tr>
						<th class="text-center" align="center" colspan='18'>Daftar Jadwal Penjualan Tiket</th>
					</tr>
					<tr>
						<table class="table table-hover" id="mydata">
							<thead>
								<tr>
									<th>No</th>
									<th>Id</th>
									<th>Asal</th>
									<th>Tujuan</th>
									<th>Tanggal Berangkat</th>
									<th>Jam Berangkat</th>
									<th>Seat</th>
									<th>Harga Satuan</th>
								</tr>
								<?php 
						$no = 1;
						foreach($laporan as $l){ 
					?>
					<tr>
						<td class="align-middle text-center"><?php echo $no++ ?></td>
						<td class="align-middle"><?php echo $l->id_tiket ?></td>
						<td class="align-middle"><?php echo $l->asal ?></td>
						<td class="align-middle"><?php echo $l->tujuan ?></td>
						<td class="align-middle"><?php echo $l->tgl_brngkt ?></td>
						<td class="align-middle"><?php echo $l->jm_brngkt ?></td>
						<td class="align-middle"><?php echo $l->seat ?></td>
						<td class="align-middle"><?php echo $l->harga ?></td>
					</tr>
					<?php } ?>
							</thead>
						</table>
</div>
 
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
		
</body>
</html>