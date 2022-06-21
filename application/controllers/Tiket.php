<?php

class Tiket extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('m_tiket');
    }
	
	public function index() { 
		if($this->session->userdata('status') != "admin_login"){
			echo "<script>
			alert('Anda belum login, silakan login terlebih dahulu!');
			window.location.href='../ticketingdamri/Ticketing';
			</script>";
		}
	
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/data_tiket');
	}
	
	function data_tiket(){
        $data=$this->m_tiket->tiket_list();
        echo json_encode($data);
    }
	
	function simpan_tiket(){
        $id_tiket=NULL;
        $asal=$this->input->post('asal');
        $tujuan=$this->input->post('tujuan');
        $tgl_brngkt=$this->input->post('tgl_brngkt');
        $jm_brngkt=$this->input->post('jm_brngkt');
        $seat=$this->input->post('seat');
        $harga=$this->input->post('harga');
        $data=$this->m_tiket->simpan_tiket($id_tiket,$asal,$tujuan,$tgl_brngkt,$jm_brngkt,$seat,$harga);
        echo json_encode($data);
    }
	
	function hapusData(){
        $id_tiket = $this->input->post('id_tiket');
        $data = $this->m_tiket->deleteData($id_tiket);
        echo json_encode($data); 
    }
	
	function get_tiket(){
        $idtiket=$this->input->get('id');
        $data=$this->m_tiket->get_tiket_by_idtiket($idtiket);
        echo json_encode($data);
    }
	
	function ambilDataByIdtiket(){
        $idtiket = $this->input->post('idtiket'); 
        $data = $this->m_tiket->getDataByIdtiket($idtiket); 
        echo json_encode($data); 
    }
	
	function update_tiket(){
        $idtiket=$this->input->post('idtiket');
        $asal=$this->input->post('asal');
        $tujuan=$this->input->post('tujuan');
        $tgl_brngkt=$this->input->post('tgl_brngkt');
        $jm_brngkt=$this->input->post('jm_brngkt');
        $seat=$this->input->post('seat');
        $harga=$this->input->post('harga');
        $data=$this->m_tiket->update_tiket($idtiket,$asal,$tujuan,$tgl_brngkt,$jm_brngkt,$seat,$harga);
        echo json_encode($data);
    }
}
