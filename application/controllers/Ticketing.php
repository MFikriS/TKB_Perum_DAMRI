<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ticketing extends CI_Controller {
	
	public function index()
	{
		$this->load->view('home');
	}
}
