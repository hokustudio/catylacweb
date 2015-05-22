<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pengecatan extends CI_Controller {
	public function index() {
		$this->load->view('headerfooter/header_view.php');
		$this->load->view('pengecatan/pengecatan_view.php');
		$this->load->view('headerfooter/footer_view.php');
	}
}