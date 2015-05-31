<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inspirasi extends CI_Controller {
	public function wwfi() {
		$this->load->view('headerfooter/header_view.php');
		$this->load->view('inspirasi/wwfi_view.php');
		$this->load->view('headerfooter/footer_view.php');
	}

	public function tipstrik() {
		$this->load->model("posts_model");
		
		//$posts = $this->posts_model->addPostView($id);
		
		$posts = $this->posts_model->getPostWithCategoryName("Tips & Trik");
		$data = array(
			'on' => array(),
			'popular' => array()
			);
		date_default_timezone_set('Asia/Jakarta');
		$i=0;
		foreach ($posts as $post) {
			$data['on']['id'][$i] = $post['id'];
			$image = $this->posts_model->getPostImage($post['id']);
			$data['on']['image'][$i] = $image[0];

			$data['on']['title'][$i] =  $post['title'];
			$data['on']['content'][$i] = $post['content'];
			$date = date_create($post['date_modified']);
			$data['on']['date'][$i] = date_format($date,"M,d Y");
			//$data['on']['tag'] = $post['tag_id'];
			$data['on']['view'][$i] = $post['count'];
			
			$i++;
		}

		$pops = $this->posts_model->GetPopularPosts(3);

		$i=0;
		date_default_timezone_set('Asia/Jakarta');
		foreach ($pops as $pop) {
			$data['popular']['id'][$i] =  $pop['id'];
			$image = $this->posts_model->getPostImage($pop['id']);
			$data['popular']['image'][$i] = $image[0];

			$data['popular']['title'][$i] =  $pop['title'];

			$data['popular']['content'][$i] = strip_tags($pop['content']);
			
			$date = date_create($pop['date_modified']);
			$data['popular']['date'][$i] = date_format($date,"M,d Y");

			//$data['popular']['tag'][$i] = $pop['tag_id'];


			$data['popular']['view'][$i] = $pop['count'];

			$i++;
		}

		$this->load->view('headerfooter/header_view.php');
		$this->load->view('inspirasi/category_view.php',$data);
		$this->load->view('headerfooter/footer_view.php');
	}

	public function katalog() {
		
	}

	public function putihin(){
		$this->load->view('headerfooter/header_view.php');
		$this->load->view('wwfi/putih-in.php');
	}
}