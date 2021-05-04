<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	public function index() {
		/* $this->session->unset_userdata('login_status');
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('id_user'); */

		delete_cookie('login_status');
		delete_cookie('id_user');
		delete_cookie('username');
		
		redirect(base_url().'login');
	}
}