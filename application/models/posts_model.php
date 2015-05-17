<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posts_model extends CI_Model {
	public function GetPost($id)
	{
		$query = "SELECT * FROM cat_posts WHERE id=".$id;
		$result = $this->db->query($query);
        $result = $result->result_array();
		return $result;
	}

	public function GetRecentPosts($numb)
	{
		$query = "SELECT * FROM cat_posts ORDER BY id DESC LIMIT ".$numb;
		$result = $this->db->query($query);
        $result = $result->result_array();
		return $result;
	}
} 