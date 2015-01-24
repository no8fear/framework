<?php 


	class model extends CI_MODEL{
		public function getData(){
			$query = $this->db->get('test');
			return $query->result();
		}
	}


?>