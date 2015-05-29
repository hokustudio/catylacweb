<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inspirasi extends CI_Controller {
	public function wwfi() {
		$this->load->view('headerfooter/header_view.php');
		$this->load->view('inspirasi/wwfi_view.php');
		$this->load->view('headerfooter/footer_view.php');
	}

	public function tipstrik() {

	}

	public function katalog() {
		
	}

	public function putihin(){
		$this->load->view('headerfooter/header_view.php');
		$this->load->view('wwfi/putih-in.php');
	}
}