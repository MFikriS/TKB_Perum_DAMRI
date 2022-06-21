<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Input_Jadwal extends CI_Controller {

	function __construct() {
		parent::__construct();
	}
	public function index() { 
		$this->load->view('admin/input_jadwal');
	}
}
