<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curhat extends CI_Controller {
	function __construct() {
		parent:: __construct();
		// periksa user login
		if (!$this->input->cookie('login_status')) redirect(base_url().'login');

		// panggil model
		$this->load->model('m_curhat');
		$this->load->model('m_login');

		// variabel
		$this->title = "Curhat ah...";	
		
		// catat waktu penggunaan terakhir di field waktu_terakhir_login
		$this->m_login->update_waktu_terakhir_login($this->input->cookie('username'));
	}

	public function buat() {
		$this->load->view('v_curhat_buat');
	}
	public function simpan() {
		$this->m_curhat->simpan();
		redirect(base_url().'home');
	}
}
?>