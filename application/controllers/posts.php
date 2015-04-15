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
		if(empty($id)){
			//$this->load->view('home/home_view.php');
			redirect(site_url('home'));
		}else{
		$this->load->model("posts_model");
		$posts = $this->posts_model->GetPost($id);
		$data = array(
			'on' => array(),
			'popular' => array(),
			'recent' => array()
			);
		date_default_timezone_set('Asia/Jakarta');
		foreach ($posts as $post) {
			$data['on']['title'] =  $post['title'];
			$data['on']['content'] = $post['content'];
			$date = date_create($post['date_modified']);
			$data['on']['date'] = date_format($date,"M,d Y");
			//$data['on']['tag'] = $post['tag_id'];
			$data['on']['category'] = $post['category'];
			$data['on']['view'] = $post['count'];
		}

		$pops = $this->posts_model->GetPopularPosts(3);

		$i=0;
		date_default_timezone_set('Asia/Jakarta');
		foreach ($pops as $pop) {
			$data['popular']['id'][$i] =  $pop['id'];

			$data['popular']['title'][$i] =  $pop['title'];

			$data['popular']['content'][$i] = strip_tags($pop['content']);
			
			$date = date_create($pop['date_modified']);
			$data['popular']['date'][$i] = date_format($date,"M,d Y");

			//$data['popular']['tag'][$i] = $pop['tag_id'];

			$data['popular']['category'][$i] = $pop['category'];

			$data['popular']['view'][$i] = $pop['count'];

			$i++;
		}

		$recent = $this->posts_model->GetRecentPosts(4);
		$i=0;
		date_default_timezone_set('Asia/Jakarta');
		foreach ($recent as $r) {
			$data['recent']['id'][$i] =  $r['id'];

			$data['recent']['title'][$i] =  $r['title'];

			$data['recent']['content'][$i] = strip_tags($r['content']);
			
			$date = date_create($r['date_modified']);
			$data['recent']['date'][$i] = date_format($date,"M,d Y");

			//$data['recent']['tag'][$i] = $r['tag_id'];

			$data['recent']['category'][$i] = $r['category'];

			$data['recent']['view'][$i] = $r['count'];

			$i++;
		}

    	$this->load->view('headerfooter/header_view');
      	$this->load->view('post/post_view', $data);
      	$this->load->view('headerfooter/footer_view');
      }
	}
}
