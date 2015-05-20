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
		$query = "SELECT * FROM post WHERE flag = 1 ORDER BY date_created DESC LIMIT ".$numb;
		$result = $this->db->query($query);
        $result = $result->result_array();
		return $result;
	}

	public function GetPopularPosts($numb)
	{
		$query = "SELECT * FROM post  WHERE flag = 1 ORDER BY count DESC LIMIT ".$numb;
		$result = $this->db->query($query);
        $result = $result->result_array();
		return $result;
	}

	public function getPostImage($id)
	{
		$query = "SELECT * FROM post_media  WHERE post_id = ".$id;
		$result = $this->db->query($query);
        $result = $result->result_array();

        $query= "SELECT * FROM media  WHERE id = ".$result[0]['media_id'];
        $result = $this->db->query($query);
        $result = $result->result_array();
        
		return $result;
	}

	public function insertPost($post_params, $media_params)
	{
		$query1 = " 
		INSERT INTO post (title,content, category, date_modified, date_created, author_id, flag, count) VALUES ('"
			.$post_params['title']."','".$post_params['content']."','".$post_params['category']."','".$post_params['date_modified']."','"
			.$post_params['date_created']."',".$post_params['author_id'].",".$post_params['flag'].",".$post_params['count'].");";
		
		$query2 = "SET @post_id = LAST_INSERT_ID();";
		$query3 = "INSERT INTO media (title,type,description,url,date_created) VALUES ('"
			.$media_params['title']."',".$media_params['type'].",'".$media_params['description']."','".$media_params['url']."','"
			.$media_params['date_created']."');";

		$query4 = "SET @media_id = LAST_INSERT_ID();";
		
		$query5 = "INSERT INTO post_media (post_id,media_id) VALUES(@post_id, @media_id);";
		//print_r($query);
		$result = $this->db->query($query1);
		$result = $this->db->query($query2);
		$result = $this->db->query($query3);
		$result = $this->db->query($query4);
		$result = $this->db->query($query5);

		//$query = $this->db->insert('post', $post_params);
		//$query = $this->db->insert('media', $media_params);
	}
} 