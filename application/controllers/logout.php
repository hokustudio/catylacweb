<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class logout extends CI_Controller {
	public function index()
    {
        $this->session->unset_userdata('logged_in');
        $this->session->sess_destroy();
        redirect(site_url());
    }
}
