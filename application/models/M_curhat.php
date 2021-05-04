<?php 
class M_curhat extends CI_Model {
	function tampil() {
		$q = $this->db->query("
				SELECT curhat.*, user.nama, user.jenis_kelamin
				FROM curhat
				JOIN user
					ON curhat.id_user = user.id_user
				ORDER BY
					curhat.id_curhat DESC
			");
		return $q;
	}
	function simpan() {
		$q = $this->db->query("
				INSERT INTO curhat
				SET
					id_user        	= '".$this->input->cookie('id_user')."',
					isi	        	= '".$this->input->post('isi')."',
					mood           	= '".$this->input->post('mood')."',
					tanggal_dibuat  = '".date("Y-m-d H:i:s")."'
			");
		return $q;
	}

	function cek($id_curhat, $id_user) {
		$cek = $this->db->get_where("curhat_like", array('id_curhat' => $id_curhat, 'id_user' => $id_user));
		$cek = $cek->result_array();
		return $cek;
	}
}