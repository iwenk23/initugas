<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function test($param1,$param2){
		echo "IRWAN APRIANDI ". $param1;
		echo " ". $param2;
	}
	public function dosen(){
		echo "DOSEN TERBAIK, PAHRUL IRFAN";
	}
}
