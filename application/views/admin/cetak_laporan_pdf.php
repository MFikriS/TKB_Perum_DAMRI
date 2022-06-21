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

<body>

<body>
	<div class="container">
		<center><h1>Perum DAMRI</h1>
			<table style="float: right;" border="1" cellpadding="2" cellspacing="0" class="table table-bordered">
				<tbody>
					<center><h1>Laporan Jadwal Penjualan Tiket</h1></center>
					<tr>
						<th class="text-center" align="center" colspan='18'>Daftar Jadwal Penjualan Tiket</th>
					</tr>
					<tr>
					<div class="row">
						<div id="reload">
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
							</thead>
							<tbody id="show_data">
								 
							</tbody>
						</table>
						</div>
					</div>
	</div>
 
	</div>
</div>
 
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
		tampil_data_tiket();   //pemanggilan fungsi tampil tiket.
         
        
          
        //fungsi tampil tiket
        function tampil_data_tiket(){
            $.ajax({
                type  : 'GET',
                url   : '<?php echo base_url()?>index.php/tiket/data_tiket',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
					var no;
                    for(i=0; i<data.length; i++){
						var no = i+1;
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].id_tiket+'</td>'+
                                '<td>'+data[i].asal+'</td>'+
                                '<td>'+data[i].tujuan+'</td>'+
                                '<td>'+data[i].tgl_brngkt+'</td>'+
                                '<td>'+data[i].jm_brngkt+'</td>'+
                                '<td>'+data[i].seat+'</td>'+
                                '<td>'+data[i].harga+'</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
    });
</script>
	<script>
		window.print();
	</script>
		
</body>
</html>