<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{

      $this->load->view('headerfooter/header_view');
      $this->load->view('home/home_view');
      $this->load->view('headerfooter/footer_view');
	}
}
