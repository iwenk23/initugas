<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa extends CI_Controller {
	public function index()
	{
		$data['nama_lengkap'] = "Irwan Apriandi";
		$data['jenis_kelamin'] = "Laki-Laki";
		$data['nim'] = 1810330017;

		$mahasiswa[0] = array(
			'nim' => 1810330017,
			'nama' => "Irwan Apriandi");
		$data['mahasiswa'] = $mahasiswa;
		$this->load->view('mahasiswa_index', $data);
		
	}

	public function tambah()
	{
		$this->load->view('mahasiswa_tambah');
	}

}
?>