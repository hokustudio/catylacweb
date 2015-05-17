<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model("posts_model");
		$posts = $this->posts_model->GetRecentPosts(9);
		$i=0;
		foreach ($posts as $post) {
			$data['title'][$i] =  $post['title'];
			$data['content'][$i] = strip_tags($post['content']);
			$data['date'][$i] = $post['date_updated'];
			$data['tag'][$i] = $post['tag'];
			$data['category'][$i] = $post['category'];
			$i++;
		}

    	$this->load->view('headerfooter/header_view');
      	$this->load->view('home/home_view', $data);
      	$this->load->view('headerfooter/footer_view');
	}
}
