<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Signcontrol extends CI_controller{
	public function index(){
		$this->load->view('sign');
	}
}
