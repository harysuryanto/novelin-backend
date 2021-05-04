<?php
	class M_login extends CI_Model {
		function __construct() {
			parent::__construct();

			$this->table = "user";
		}

		function cek($username, $password) {
			$cek = $this->db->get_where($this->table, array('username' => $username, 'password' => $password));
			$cek = $cek->result_array();
			return $cek;
		}
		function simpan_daftar() {
			$q = $this->db->query("
				INSERT INTO user
				SET
					username		= '".$this->input->post('username')."',
					password		= '".$this->input->post('password')."',
					nama			= '".$this->input->post('nama')."',
					email			= '".$this->input->post('email')."',
					tanggal_lahir	= '".$this->input->post('tanggal_lahir')."',
					jenis_kelamin	= '".$this->input->post('jenis_kelamin')."',
					tanggal_dibuat  = '".date("Y-m-d H:i:s")."'
			");
		}
		function get_id_user($username) {
			$q = $this->db->query("
					SELECT *
					FROM user
					WHERE username = '".$username."'
				");
			
			foreach ($q->result() as $data) {
				return $data->id_user;
			}
		}
		function update_waktu_terakhir_login($username) {
			$this->db->query("
					UPDATE user
					SET waktu_terakhir_login = '".date("Y-m-d H:i:s")."'
					WHERE username='".$username."'
				");
		}
	}
?>