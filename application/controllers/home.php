<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$this->load->model("posts_model");
		$posts = $this->posts_model->GetRecentPosts(9);
		$i=0;
		date_default_timezone_set('Asia/Jakarta');
		foreach ($posts as $post) {
			$data['id'][$i] =  $post['id'];

			$data['title'][$i] =  $post['title'];

			$data['content'][$i] = strip_tags($post['content']);
			
			$date = date_create($post['date_updated']);
			$data['date'][$i] = date_format($date,"M,d Y");

			$data['tag'][$i] = $post['tag'];

			$data['category'][$i] = $post['category'];

			$i++;
		}

    	$this->load->view('headerfooter/header_view');
      	$this->load->view('home/home_view', $data);
      	$this->load->view('headerfooter/footer_view');
	}
}
