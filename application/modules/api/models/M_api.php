<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_api extends CI_Model {

	function save_log($data) : bool {
		$this->db->insert('log', $data);
		return true;
	}
	
}
