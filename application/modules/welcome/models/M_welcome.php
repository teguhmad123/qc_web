<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_welcome extends CI_Model {

	function save_log($data) : bool {
		$this->db->insert('log', $data);
		return true;
	}

	function get_log($type, $status) {
		$where = " 1 = 1 ";
		switch ($type) {
			case 'month':
				$where .= " AND a.date>now() - interval 1 month";
				break;
			
			default:
				$where .= " AND date(a.date) = date(now())";
				break;
		}

		switch ($status) {
			case 'good':
				$where .= " AND a.status = 1";
				break;
			case 'not good':
				$where .= " AND a.status = 0";
				break;
			
			default:
				break;
		}

		$sql = "SELECT 
				count(1) AS qty,
				date(a.date) AS date,
				status
				FROM log a
				WHERE $where
				GROUP BY date(a.date), a.status
				ORDER BY a.date ASC";
		$res = $this->db->query($sql);
		return $res->result_array();
	}
	
}
