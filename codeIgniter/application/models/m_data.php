<?php 

class M_data extends CI_Model{
	function ambil_data(){
		return $this->db->get('user');
	}
}
// syntax untuk menampilkan data dari tabel user yang telah dibuat