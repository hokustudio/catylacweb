<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class posts_model extends CI_Model {
	public function GetAllPost()
	{
		$query = "SELECT * FROM post WHERE flag != 0 ORDER BY date_modified DESC";
		$result = $this->db->query($query);
		$result = $result->result_array();
		return $result;
	}

	public function GetDraftPost()
	{
		$query = "SELECT * FROM post WHERE flag = '2' ORDER BY date_modified DESC";
		$result = $this->db->query($query);
		$result = $result->result_array();
		return $result;
	}

	public function GetPublishedPost()
	{
		$query = "SELECT * FROM post WHERE flag = '1' ORDER BY date_modified DESC";
		$result = $this->db->query($query);
		$result = $result->result_array();
		return $result;
	}

	public function GetPost($id)
	{
		$query = "SELECT * FROM post WHERE category='Tips & Trik' AND id=".$id;
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
		INSERT INTO post (title,content, date_modified, date_created, author_id, flag, count) VALUES ('"
			.$post_params['title']."','".$post_params['content']."','".$post_params['date_modified']."','"
			.$post_params['date_created']."',".$post_params['author_id'].",".$post_params['flag'].",".$post_params['count'].");";
		
		$query2 = "SET @post_id = LAST_INSERT_ID();";
		$query3 = "INSERT INTO media (title,type,description,url,date_created) VALUES ('"
			.$media_params['title']."',".$media_params['type'].",'".$media_params['description']."','".$media_params['url']."','"
			.$media_params['date_created']."');";

		$query4 = "SET @media_id = LAST_INSERT_ID();";
		
		$query5 = "INSERT INTO post_media (post_id,media_id) VALUES(@post_id, @media_id);";
		$i=0;
		foreach ($post_params['category'] as $key => $value) {
			$query6[$i] = "INSERT INTO post_category (post_id,category_id) VALUES(@post_id, ".$value.");";
			$i++;
		}
		//print_r($post_params['category']);
		$result = $this->db->query($query1);
		$result = $this->db->query($query2);
		$result = $this->db->query($query3);
		$result = $this->db->query($query4);
		$result = $this->db->query($query5);
		$i=0;
		foreach ($post_params['category'] as $key => $value) {
			$result = $this->db->query($query6[$i]);
			$i++;
		}
	}
	public function addCategory($params)
	{
		$result = $this->db->insert('category',$params);
	}

	public function getAllCategory()
	{
		$query = "SELECT * FROM category";
		$result = $this->db->query($query);
        $result = $result->result_array();
		return $result;
	}
	public function getPostCategoryID($id)
	{
		$query = "SELECT * FROM post_category WHERE post_id=".$id;
		$result = $this->db->query($query);
        $result = $result->result_array();
        return $result;
	}

	public function getPostCategoryName($id)
	{
		$query = "SELECT * FROM post_category WHERE post_id=".$id;
		$result = $this->db->query($query);
        $result = $result->result_array();
        $i=0;
        foreach ($result as $cat_id) {
        	$query = "SELECT * FROM category  WHERE id = ".$cat_id['category_id'];
	        $name = $this->db->query($query);
    	    $name = $name->result_array();
    	    if($i==0){
        		$allname = $name[0]['name'];
    	    }else{
    	    	$allname.=", ".$name[0]['name'];
    		}
    	    $i++;
        }
		return $allname;
	}

	public function deletePostByID($id)
	{
		$query1 = "DELETE FROM post WHERE id=".$id;
		$query2 = "DELETE FROM post_media WHERE post_id=".$id;
		$result = $this->db->query($query1);
		$result = $this->db->query($query2);
	}

	public function publishPost($id)
	{
		$query1 = "UPDATE post SET flag = 1 WHERE id=".$id;
		$result = $this->db->query($query1);
	}

	public function draftPost($id)
	{
		$query1 = "UPDATE post SET flag = 2 WHERE id=".$id;
		$result = $this->db->query($query1);
	}

	public function editOnlyPost($post_params){
		$query1 = " 
		UPDATE post SET title = '".$post_params['title']."',content = '".$post_params['content']."', date_modified = '".$post_params['date_modified']."',author_id=".$post_params['author_id']." 
		WHERE id =".$post_params['id'].";";
		$query2 = "DELETE FROM post_category WHERE post_id=".$post_params['id'].";";

		$i=0;
		foreach ($post_params['category'] as $key => $value) {
			$query3[$i] = "INSERT INTO post_category (post_id,category_id) VALUES(".$post_params['id'].", ".$value.");";
			$i++;
		}

		$result = $this->db->query($query1);
		$result = $this->db->query($query2);

		$i=0;
		foreach ($post_params['category'] as $key => $value) {
			$result = $this->db->query($query3[$i]);
			$i++;
		}

	}
	public function editPostAndMedia($post_params, $media_params){
		$query1 = " 
		UPDATE post SET title = '".$post_params['title']."',content = '".$post_params['content']."', date_modified = '".$post_params['date_modified']."',author_id=".$post_params['author_id']." 
		WHERE id =".$post_params['id'].";";

		$query2 = "DELETE FROM post_media WHERE post_id=".$post_params['id'].";";

		$query3 = "INSERT INTO media (title,type,description,url,date_created) VALUES ('"
			.$media_params['title']."',".$media_params['type'].",'".$media_params['description']."','".$media_params['url']."','"
			.$media_params['date_created']."');";

		$query4 = "SET @media_id = LAST_INSERT_ID();";
		
		$query5 = "INSERT INTO post_media (post_id,media_id) VALUES(".$post_params['id'].", @media_id);";


		$query6 = "DELETE FROM post_category WHERE post_id=".$post_params['id'].";";

		$i=0;
		foreach ($post_params['category'] as $key => $value) {
			$query7[$i] = "INSERT INTO post_category (post_id,category_id) VALUES(".$post_params['id'].",".$value.");";
			$i++;
		}
		//print_r($post_params['category']);
		$result = $this->db->query($query1);
		$result = $this->db->query($query2);
		$result = $this->db->query($query3);
		$result = $this->db->query($query4);
		$result = $this->db->query($query5);
		$result = $this->db->query($query6);
		$i=0;
		foreach ($post_params['category'] as $key => $value) {
			$result = $this->db->query($query7[$i]);
			$i++;
		}
	}

	public function addPostView($id){
		$query1 = "UPDATE post SET count = count+1 WHERE id=".$id;
		$result = $this->db->query($query1);
	}
} 