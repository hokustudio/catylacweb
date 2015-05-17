<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {
	public function index()
	{
		$this->load->model("posts_model");

		$this->load->view('headerfooter/header_view');
      	$this->load->view('post/post_view');
      	$this->load->view('headerfooter/footer_view');
		
	}

	public function post($id)
	{
		$this->load->model("posts_model");
		$posts = $this->posts_model->GetPost($id);

		date_default_timezone_set('Asia/Jakarta');
		foreach ($posts as $post) {
			$data['title'] =  $post['title'];
			$data['content'] = $post['content'];
			$date = date_create($post['date_modified']);
			$data['date'] = date_format($date,"M,d Y");
			$data['tag'] = $post['tag_id'];
			$data['category'] = $post['category'];
		}

    	$this->load->view('headerfooter/header_view');
      	$this->load->view('post/post_view', $data);
      	$this->load->view('headerfooter/footer_view');
	}
}
