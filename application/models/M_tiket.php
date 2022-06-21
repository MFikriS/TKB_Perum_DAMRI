<?php
class M_tiket extends CI_Model{
	
	function tiket_list(){
        $hasil=$this->db->query("SELECT * FROM tiket");
        return $hasil->result();
    }     
	
	function simpan_tiket($id_tiket,$asal,$tujuan,$tgl_brngkt,$jm_brngkt,$seat,$harga){
        $hasil=$this->db->query("INSERT INTO tiket (id_tiket,asal,tujuan,tgl_brngkt,jm_brngkt,seat,harga)VALUES('$id_tiket','$asal','$tujuan','$tgl_brngkt','$jm_brngkt','$seat','$harga')");
        return $hasil;
    }
	
	function deleteData($id_tiket){
        $this->db->where('id_tiket',$id_tiket); 
        $this->db->delete('tiket'); 
    }
	
	function get_tiket_by_idtiket($id){
        $hsl=$this->db->query("SELECT * FROM tiket WHERE id_tiket='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_tiket' => $data->id_tiket,
                    'asal' => $data->asal,
                    'tujuan' => $data->tujuan,
                    'tgl_brngkt' => $data->tgl_brngkt,
                    'jm_brngkt' => $data->jm_brngkt,
                    'seat' => $data->seat,
                    'harga' => $data->harga
                    );
            }
        }
        return $hasil;
    }
	
	function update_tiket($idtiket,$asal,$tujuan,$tgl_brngkt,$jm_brngkt,$seat,$harga){
        $hasil=$this->db->query("UPDATE tiket SET asal='$asal',tujuan='$tujuan',tgl_brngkt='$tgl_brngkt',jm_brngkt='$jm_brngkt',seat='$seat',harga='$harga' WHERE id_tiket='$idtiket'");
        return $hasil;
    }
}