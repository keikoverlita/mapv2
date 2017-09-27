<?php
class M_user extends CI_Model {

	public function __construct()
	{
		parent::__construct();
	}

	function get_user_data($values) {
		$this->db->where('username',$values);
		$res = $this->db->get('user');
		$lele= $res->result();
		$lele2=array(
			'is_login'=>1,
			'login_count'=>($lele[0]->login_count)+1
		);
		if ($res->num_rows() > 0) {
			$this->db->where('username',$values);
			$this->db->update('user',$lele2);
		  return $res->result();
		}
	}
}
