<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_login extends CI_Controller {
	
	public function __construct()
	{
		parent::__construct();
		$this->load->library('session');
		$this->load->model('m_admin');
	}
	
	public function index()
	{
		$usr = $this->input->post('username');
		$pass = $this->input->post('password');
		$where = array(
			'username' => $usr,
			'password' => $pass
			);
		$cek = $this->m_admin->cek_login("user",$where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'username' => $usr,
				'status' => "admin_login"
				);
				
			$this->session->set_userdata($data_session);
			$this->session->set_flashdata('sks', '<center><b>Anda berhasil Login!</b></center>');  
			redirect(base_url('Admin'));
		} else {
			echo "Username atau password salah !";
			$this->session->set_flashdata('gagal', '<center><b>Gagal Login!</b> </br>Username atau Password salah!</center>'); 
			redirect(base_url('Ticketing'));
		}
	}
	
	public function logout()
	{
		$this->session->sess_destroy();
		echo "<script>
		alert('Sukses Logout');
		window.location.href='../Ticketing';
		</script>";
	}
}

?>
