<?php
class M_user extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function get_user_data($values) {
		$this->db->where('username',$values);
		$res = $this->db->get('user');
		if ($res->num_rows() > 0) {
		    return $res->result();
		}
	}
}