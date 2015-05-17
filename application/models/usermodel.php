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
}