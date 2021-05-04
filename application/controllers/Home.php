<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	function __construct() {
		parent:: __construct();
		// periksa user login
		if (!$this->input->cookie('login_status')) redirect(base_url().'login');

		// panggil model
		$this->load->model('m_curhat');
		$this->load->model('m_login');

		// variabel
		$this->title = "Welcome to Novelin";

		// perbarui cookie
		/* $cookie_login_status = $this->input->cookie('login_status');
		$cookie_id_user = $this->input->cookie('id_user');
		$cookie_username = $this->input->cookie('username');
		delete_cookie('login_status');
		delete_cookie('id_user');
		delete_cookie('username'); */
		/* set_cookie('login_status', $cookie_login_status, date('m') + 1);
		set_cookie('id_user', $cookie_id_user, date('m') + 1);
		set_cookie('username', $cookie_username, date('m') + 1); */
		
		// catat waktu penggunaan terakhir di field waktu_terakhir_login
		$this->m_login->update_waktu_terakhir_login($this->input->cookie('username'));
	}

	public function index() {
		$tampil = array(
				'tampil_curhat'	=> $this->m_curhat->tampil(),
			);
		$this->load->view('v_home', $tampil);
	}

	function cek_suka($id_curhat, $id_user) {
		$cek = $this->m_curhat->cek_suka($id_curhat, $id_user);

		if (count($cek) == 1)
			return true;
		else
			return false;
	}
}
?>