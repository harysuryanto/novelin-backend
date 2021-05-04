<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	function __construct() {
		parent:: __construct();
		
		// periksa user login
		if ($this->input->cookie('login_status')) redirect(base_url().'home');
		
		// panggil model
		$this->load->model('m_login');

		// variabel
		$this->title = "Welcome to Novelin";
	}
	
	public function index() {
		$this->load->view('v_login');
	}

	function proses_login() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cek = $this->m_login->cek($username, $password);

		if (count($cek) == 1) {
			$id_user = $this->m_login->get_id_user($username);
			$waktu_kedaluwarsa_cookie = time() + 864000; // cari tau artinya
			/* $this->session->set_userdata(array(
					'login_status'	=> TRUE,
					'id_user'		=> $this->id_user,
					'username'		=> $username
				)); */
			set_cookie('login_status', TRUE, $waktu_kedaluwarsa_cookie);
			set_cookie('id_user', $id_user, $waktu_kedaluwarsa_cookie);
			set_cookie('username', $username, $waktu_kedaluwarsa_cookie);

			redirect(base_url().'home');

			/* 
				Catatan:
				Field waktu_terakhir_login diisi menggunakan function update_waktu_terakhir_login,
				function tersebut disimpan di Model m_login,
				dan dipanggil di setiap Controller (halaman).
			*/
		} else {
			?><script>
				alert('Username atau password salah!');
				window.history.back();
			</script><?php 
		}
	}

	function daftar() {
		$this->load->view('v_daftar');
	}
	function simpan_daftar() {
		$this->m_login->simpan_daftar();
		redirect(base_url().'login');
	}
}