<?php
class Excel_import_model extends CI_Model
{
	function select()
	{
		$this->db->order_by('id_kp', 'DESC');
		$query = $this->db->get('kp');
		return $query;
	}

	function insert($data)
	{
		$this->db->insert_batch('kp', $data);
	}
}
