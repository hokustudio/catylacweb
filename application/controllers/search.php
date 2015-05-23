<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	public function s()
	{
		$string = $_GET['search'];
		if($string != NULL)
		{
			$this->load->model('searchmodel');
			$s = $this->searchmodel->search($string);


			//echo count($s);
			//echo count($s[0]);
			//echo count($s[1]);
			
			// for($i=0;$i<count($s);$i++) {
			// 	for($j=0;$i<count($s[$i]);$j++)
			// 	{
			// 		//$data = $s[$i][$j];
			// 		foreach ($s[$i] as $key) {
			// 			$data = $key[0];
			// 		}
			// 	}
			// }

			//echo count($s);
			if(count($s))
			{
				$this->load->model('posts_model');
				$i=0;
				date_default_timezone_set('Asia/Jakarta');
				foreach ($s as $post) {
					$data['id'][$i] =  $post['id'];
					$image = $this->posts_model->getPostImage($post['id']);
					$data['image'][$i] = $image[0];
					$data['title'][$i] =  $post['title'];

					$data['content'][$i] = strip_tags($post['content']);
					
					$date = date_create($post['date_modified']);
					$data['date'][$i] = date_format($date,"M,d Y");

					$data['view'][$i] = $post['count'];

					$i++;
				}
				//foreach ($s as $key) {
				//	$data['search'] = $key;
				//}
				$this->load->view('headerfooter/header_view');
				$this->load->view('search/search_view',$data);
				$this->load->view('headerfooter/footer_view');
			}
			else
			{
				$this->load->view('headerfooter/header_view');
				$this->load->view('search/search_notfound_view');
				$this->load->view('headerfooter/footer_view');
			}
			
		}
		else
		{
			//$data['warning'] = "Laman tidak ditemukan";

			$this->load->view('headerfooter/header_view');
			$this->load->view('search/search_notfound_view');
			$this->load->view('headerfooter/footer_view');
		}
	}
}