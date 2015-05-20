<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product extends CI_Controller {
	public function index() {
		$this->load->view('headerfooter/header_view.php');
		$this->load->view('produk/produk_view.php');
		$this->load->view('headerfooter/footer_view.php');
	}
}