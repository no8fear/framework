<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model extends CI_MODEL{
	public function getData(){
		$query = $this->db->get('test');
		return $query->result();
	}
}
