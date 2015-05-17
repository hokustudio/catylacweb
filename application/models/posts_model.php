<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posts_model extends CI_Model {
	public function GetPost($id)
	{
		$query = "SELECT * FROM post WHERE id=".$id;
		$result = $this->db->query($query);
        $result = $result->result_array();
		return $result;
	}

	public function GetRecentPosts($numb)
	{
		$query = "SELECT * FROM post ORDER BY id DESC LIMIT ".$numb;
		$result = $this->db->query($query);
        $result = $result->result_array();
		return $result;
	}

	public function GetPopularPosts($numb)
	{
		$query = "SELECT * FROM post ORDER BY count DESC LIMIT ".$numb;
		$result = $this->db->query($query);
        $result = $result->result_array();
		return $result;
	}
} 