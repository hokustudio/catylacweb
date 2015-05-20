<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posts_model extends CI_Model {
	public function GetAllPost()
	{
		$query = "SELECT * FROM post ORDER BY date_modified DESC";
		$result = $this->db->query($query);
		$result = $result->result_array();
		return $result;
	}

	public function GetDraftPost()
	{
		$query = "SELECT * FROM post WHERE flag = '2'";
		$result = $this->db->query($query);
		$result = $result->result_array();
		return $result;
	}

	public function GetPublishedPost()
	{
		$query = "SELECT * FROM post WHERE flag = '1'";
		$result = $this->db->query($query);
		$result = $result->result_array();
		return $result;
	}

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

	public function insertPost($post_params, $media_params)
	{
		$query = $this->db->insert('post', $post_params);
		$query = $this->db->insert('media', $media_params);
	}
} 