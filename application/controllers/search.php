<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {
	public function s()
	{
		$string = $_GET['search'];
		if($string != NULL)
		{
			$this->load->model('searchmodel');
			$s = $this->searchmodel->search($string);

			echo count($s);
			//$this->load->view('headerfooter/header_view');
			//$this->load->view('search/search_view');
			//$this->load->view('headerfooter/footer_view');
		}
		else
		{
			$data['warning'] = "Laman tidak ditemukan";

			$this->load->view('headerfooter/header_view');
			$this->load->view('search/search_view',$data);
			$this->load->view('headerfooter/footer_view');
		}
	}
}