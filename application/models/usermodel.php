<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usermodel extends CI_Model {
	public function getuserbyusername($username)
	{
		$this->db->select('*');
		$this->db->from('user_login');
		$this->db->where('username',$username);
		$query = $this->db->get();

		return $query->result_array();
	}

	public function lastloginupdate($id)
	{
		date_default_timezone_set("Asia/Bangkok");
        $now = date("Y-m-d H:i:s");
		$query_params = array('last_login_date' => $now);
		$this->db->where('id', $id);
		$this->db->update('user_login', $query_params); 
	}
}