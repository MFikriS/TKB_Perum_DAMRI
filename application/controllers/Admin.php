<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}
	public function index() { 
		if($this->session->userdata('status') != "admin_login"){
			echo "<script>
			alert('Anda belum login, silakan login terlebih dahulu!');
			window.location.href='../ticketingdamri/Ticketing';
			</script>";
		}
		$this->load->view('templates/admin/sidebar');
		$this->load->view('admin/home_content');
	}
}
