<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_laporan extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	
	public function cetak() { 
		if($this->session->userdata('status') != "admin_login"){
			echo "<script>
			alert('Anda belum login, silakan login terlebih dahulu!');
			window.location.href='../ticketingdamri/Ticketing';
			</script>";
		}
		$this->load->view('admin/cetak_laporan_pdf');
	}
	
	public function cetak_excel() { 
		if($this->session->userdata('status') != "admin_login"){
			echo "<script>
			alert('Anda belum login, silakan login terlebih dahulu!');
			window.location.href='../ticketingdamri/Ticketing';
			</script>";
		}
		$this->load->model('m_tiket');
		$data['laporan'] = $this->m_tiket->tiket_list();
		$this->load->view('admin/cetak_laporan_excel',$data);
	}
	
	public function cetak_html() { 
		if($this->session->userdata('status') != "admin_login"){
			echo "<script>
			alert('Anda belum login, silakan login terlebih dahulu!');
			window.location.href='../ticketingdamri/Ticketing';
			</script>";
		}
		$this->load->view('admin/cetak_laporan_html');
	}
}
