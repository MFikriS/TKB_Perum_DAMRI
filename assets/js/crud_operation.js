// save new user record
$('#saveUserForm').submit('click', function () {
    var asal = $('#asal').val();
    var tujuan = $('#tujuan').val();
    var tgl = $('#tgl').val();
    var hrg = $('#hrg').val();
    var seat = $('#seat').val();
    var jm = $('#jm').val();
    $.ajax({
        type: "POST",
        url: "InputJadwal/simpanData",
        dataType: "JSON",
        data: { asal: asal, tujuan: tujuan, tgl: tgl, hrg: hrg, seat: seat, jm: jm },
        success: function (data) {
           $('#asal').val("");
           $('#tujuan').val("");
           $('#tgl').val("");
           $('#hrg').val("");
           $('#seat').val("");
           $('#jm').val("");
     }
   });
   return false;
});