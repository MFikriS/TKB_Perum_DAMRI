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
		<div class="row">
			<h1 class="page-header">Cetak Laporan dalam bentuk:
			<div class="row">
				<div class="col-sm">
				  <div class="pull-right"><a href="<?php echo site_url('admin_laporan/cetak_html') ?>" class="btn btn-sm btn-success"><span class="fa fa-print"></span> HTML</a></div>
				</div>
				<div class="col-sm">
					<div class="pull-right"><a href="<?php echo site_url('admin_laporan/cetak') ?>" class="btn btn-sm btn-success"><span class="fa fa-print"></span> PDF</a></div>
				</div>
				<div class="col-sm">
				  <div class="pull-right"><a href="<?php echo site_url('admin_laporan/cetak_excel') ?>" class="btn btn-sm btn-success"><span class="fa fa-print"></span> Excel</a></div>
				</div>
			 </div>
			</h1>
		</div>
		<div class="row">
			<h1 class="page-header">Data
				<small>Tiket</small>
				<div class="pull-right"><a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalAdd"><span class="fa fa-plus"></span> Tambah Tiket</a></div>
			</h1>
		</div>
		<div class="row">
			<div id="reload">
			<table class="table table-hover" id="mydata">
				<thead>
					<tr>
						<th>Id</th>
						<th>Asal</th>
						<th>Tujuan</th>
						<th>Tanggal Berangkat</th>
						<th>Jam Berangkat</th>
						<th>Seat</th>
						<th>Harga Satuan</th>
						<th style="text-align: right;">Aksi</th>
					</tr>
				</thead>
				<tbody id="show_data">
					 
				</tbody>
			</table>
			</div>
		</div>
	</div>
 
        <!-- MODAL ADD -->
        <div name = "myForm" class="modal fade" id="ModalAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Tambah Tiket</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Asal</label>
                        <div class="col-xs-9">
                            <input name="asal" id="asal" class="form-control" type="text" placeholder="asal" style="width:335px;" required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Tujuan</label>
                        <div class="col-xs-9">
                            <input name="tujuan" id="tujuan" class="form-control" type="text" placeholder="Tujuan" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Berangkat</label>
                        <div class="col-xs-9">
                            <input name="tgl_brngkt" id="tgl_brngkt" class="form-control" type="date" placeholder="Tanggal Berangkat" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Jam Berangkat</label>
                        <div class="col-xs-9">
                            <input name="jm_brngkt" id="jm_brngkt" class="form-control" type="text" value="14:30" placeholder="Jam Berangkat" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Seat</label>
                        <div class="col-xs-9">
                            <input name="seat" id="seat" class="form-control" type="number" placeholder="Seat" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga" id="harga" class="form-control" type="number" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_simpan">Simpan</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL ADD-->
 
        <!-- MODAL EDIT -->
        <div class="modal fade" id="ModalaEdit" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 class="modal-title" id="myModalLabel">Edit Tiket</h3>
            </div>
            <form class="form-horizontal">
                <div class="modal-body">
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Id Tiket</label>
                        <div class="col-xs-9">
                            <input name="idtiket_edit" id="idtiket_edit" class="form-control" type="text" placeholder="Kode Barang" style="width:335px;" readonly>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Asal</label>
                        <div class="col-xs-9">
                            <input name="asal_edit" id="asal_edit" class="form-control" type="text" placeholder="Nama Barang" style="width:335px;" required>
                        </div>
                    </div>
 
                    <div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="tujuan_edit" id="tujuan_edit" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Tanggal Berangkat</label>
                        <div class="col-xs-9">
                            <input name="tgl_brngkt" id="tgl_brngkt_edit" class="form-control" type="date" placeholder="Tanggal Berangkat" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Jam Berangkat</label>
                        <div class="col-xs-9">
                            <input name="jm_brngkt" id="jm_brngkt_edit" class="form-control" type="text" placeholder="Jam Berangkat" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Seat</label>
                        <div class="col-xs-9">
                            <input name="seat" id="seat_edit" class="form-control" type="text" placeholder="Seat" style="width:335px;" required>
                        </div>
                    </div>
					
					<div class="form-group">
                        <label class="control-label col-xs-3" >Harga</label>
                        <div class="col-xs-9">
                            <input name="harga" id="harga_edit" class="form-control" type="text" placeholder="Harga" style="width:335px;" required>
                        </div>
                    </div>
 
                </div>
 
                <div class="modal-footer">
                    <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
                    <button class="btn btn-info" id="btn_update">Update</button>
                </div>
            </form>
            </div>
            </div>
        </div>
        <!--END MODAL EDIT-->
 
        <!--MODAL HAPUS-->
        <div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
                        <h4 class="modal-title" id="myModalLabel">Hapus Tiket</h4>
                    </div>
                    <form class="form-horizontal">
                    <div class="modal-body">
                                           
                            <input type="hidden" name="id" id="textid" value="">
                            <div class="alert alert-warning"><p>Apakah Anda yakin mau menghapus tiket ini?</p></div>
                                         
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
                        <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!--END MODAL HAPUS-->
	</div>
</div>
 
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.dataTables.js'?>"></script>
<script type="text/javascript">
    $(document).ready(function(){
		tampil_data_tiket();   //pemanggilan fungsi tampil tiket.
         
        $('#mydata').dataTable();
          
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
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+data[i].id_tiket+'</td>'+
                                '<td>'+data[i].asal+'</td>'+
                                '<td>'+data[i].tujuan+'</td>'+
                                '<td>'+data[i].tgl_brngkt+'</td>'+
                                '<td>'+data[i].jm_brngkt+'</td>'+
                                '<td>'+data[i].seat+'</td>'+
                                '<td>'+data[i].harga+'</td>'+
                                '<td style="width: 16.66%;">' + '<span><a href="javascript:;" data-id="'+data[i].id_tiket+'" data-asal="'+data[i].asal+'" data-tujuan="'+data[i].tujuan+'" data-tgl_brngkt="'+data[i].tgl_brngkt+'" data-jm_brngkt="'+data[i].jm_brngkt+'" data-seat="'+data[i].seat+'"data-harga="'+data[i].harga+'" data-toggle="modal" data-target="#ModalaEdit" class="btn btn-primary">Edit</a><button style="margin-left: 5px;" data-id="'+data[i].id_tiket+'" class="btn btn-danger btn_hapus">Hapus</button></span>'  + '</td>'
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
 
            });
        }
		
		//Simpan Tiket
        $('#btn_simpan').on('click',function(){
            var asal=$('#asal').val();
            var tujuan=$('#tujuan').val();
            var harga=$('#harga').val();
            var tgl_brngkt=$('#tgl_brngkt').val();
            var jm_brngkt=$('#jm_brngkt').val();
            var seat=$('#seat').val();
			if(asal == ""){
				alert( "Mohon isi asal lokasi keberangkatan!" );
				document.myForm.asal.focus() ;
				return false;
			} else if(tujuan == ""){
				alert( "Mohon isi tujuan lokasi keberangkatan!" );
				document.myForm.tujuan.focus() ;
				return false;
			} else if(tgl_brngkt == ""){
				alert( "Mohon isi tanggal keberangkatan!" );
				document.myForm.tgl_brngkt.focus() ;
				return false;
			} else if(jm_brngkt == ""){
				alert( "Mohon isi jam keberangkatan!" );
				document.myForm.jm_brngkt.focus() ;
				return false;
			} else if(seat == ""){
				alert( "Mohon isi total seat yang tersedia!" );
				document.myForm.seat.focus() ;
				return false;
			} else if(harga == ""){
				alert( "Mohon isi harga tiket!" );
				document.myForm.harga.focus() ;
				return false;
			} else {
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/tiket/simpan_tiket')?>",
                dataType : "JSON",
                data : {asal:asal , tujuan:tujuan, tgl_brngkt:tgl_brngkt, jm_brngkt:jm_brngkt, seat:seat, harga:harga },
                success: function(data){
                    $('[name="asal"]').val("");
                    $('[name="tujuan"]').val("");
                    $('[name="tgl_brngkt"]').val("");
                    $('[name="jm_brngkt"]').val("");
                    $('[name="tgl_brngkt"]').val("");
                    $('[name="harga"]').val("");
                    $('[name="seat"]').val("");
                    $('#ModalAdd').modal('hide');
					location.reload();
                    tampil_data_tiket();
                }
            });
            return false;
			}
        });
		
		//Hapus Data
        $("#show_data").on('click','.btn_hapus',function(){
            var id_tiket = $(this).attr('data-id');
            var status = confirm('Yakin ingin menghapus?');
            if(status){
                $.ajax({
                    url: '<?php echo base_url(); ?>index.php/tiket/hapusData',
                    type: 'POST',
                    data: {id_tiket:id_tiket},
                    success: function(response){
						location.reload();
                        tampil_data_tiket();
                    }
                })
            }
        })
		
		//Update Tiket
        $('#btn_update').on('click',function(){
            var idtiket=$('#idtiket_edit').val();
            var asal=$('#asal_edit').val();
            var tujuan=$('#tujuan_edit').val();
            var tgl_brngkt=$('#tgl_brngkt_edit').val();
            var jm_brngkt=$('#jm_brngkt_edit').val();
            var seat=$('#seat_edit').val();
            var harga=$('#harga_edit').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('index.php/tiket/update_tiket')?>",
                dataType : "JSON",
                data : {idtiket:idtiket , asal:asal, tujuan:tujuan, tgl_brngkt:tgl_brngkt, jm_brngkt:jm_brngkt, seat:seat, harga:harga},
                success: function(data){
                    $('[name="asal_edit"]').val("");
                    $('[name="tujuan_edit"]').val("");
                    $('[name="tgl_brngkt_edit"]').val("");
                    $('[name="jm_brngkt_edit"]').val("");
                    $('[name="tgl_brngkt_edit"]').val("");
                    $('[name="harga_edit"]').val("");
                    $('[name="seat_edit"]').val("");
                    $('#ModalaEdit').modal('hide');
					location.reload();
                    tampil_data_tiket();
                }
            });
            return false;
        });
		
    });
</script>
<script>
     $(document).ready(function() {
         $('#ModalaEdit').on('show.bs.modal', function (event) {
             var div = $(event.relatedTarget) // Tombol dimana modal di tampilkan
             var modal          = $(this)

             // Isi nilai pada field
             modal.find('#idtiket_edit').attr("value",div.data('id'));
             modal.find('#asal_edit').attr("value",div.data('asal'));
             modal.find('#tujuan_edit').attr("value",div.data('tujuan'));
             modal.find('#tgl_brngkt_edit').attr("value",div.data('tgl_brngkt'));
             modal.find('#jm_brngkt_edit').attr("value",div.data('jm_brngkt'));
             modal.find('#seat_edit').attr("value",div.data('seat'));
             modal.find('#harga_edit').attr("value",div.data('harga'));
         });
     });
	</script>
		
</body>
</html>