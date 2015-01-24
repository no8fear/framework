<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Control extends CI_controller{
	public function index(){
		$this->load->model('model');
		$data['records'] = $this->model->getData();

		$this->load->view('home', $data);
	}
}
