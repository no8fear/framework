<?php 

	class control extends CI_controller{
		public function index(){
			$this->load->model('model');
			$data['records'] = $this->model->getData();

			$this->load->view('home', $data);
		}
	}

?>