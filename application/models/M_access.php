<?php
class M_access extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    function validate($value1,$value2) {
        $this->db->where('username',$value1);
        $this->db->where('password',$value2);
        $query = $this->db->get('user');
        if($query->num_rows() == 1) {
            return TRUE;
        }
        else {
            return FALSE;
        }
    }
}