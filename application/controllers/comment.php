<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Comment extends CI_Controller {
	public function index()
	{
		$this->load->view('coba/leave_comment');
	}
}