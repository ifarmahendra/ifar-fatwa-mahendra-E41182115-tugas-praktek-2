<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Belajar extends CI_Controller {
	
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
	}

	function user(){
		$data['user'] = $this->m_data->ambil_data()->result();
		$this->load->view('v_user.php',$data);
	}

}

//didalam file belajar.php maupun didalam folder controllers ini digunakan sebagai aksi pemanggilan dari project maupun pemanggilan database yang dibuat