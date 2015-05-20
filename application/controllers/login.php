<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index() {
		if($this->session->userdata('logged_in') && $this->session->userdata('user_role') == 2) 
		{
      		redirect(site_url());
      	}
      	else
      	{
      		$this->load->view('login/login_view');
      	}
  	}

  	public function verifylogin()
  	{
  		if (!empty($_POST['username']) && !empty($_POST['password'])) {

            $this->load->model('usermodel');
            $check = $this->usermodel->getuserbyusername($_POST['username']);

            $login_ok = false;
            $pass = md5($_POST['password']);    
            foreach ($check as $key) {
                if ($check) {
                    if ($pass == $key['password'] && $key['role'] == 2) 
                    {
                        $login_ok = true;
                    }
                }
            }
     
            if ($login_ok) {
                foreach ($check as $row) {
                    $array_items = array(
                        'user_id' => $row['id'],
                        'user_name' => $row['username'],
                        'user_role' => $row['role'],
                        'logged_in' => true
                        );
                    $this->session->set_userdata($array_items);
                }


                $this->usermodel->lastloginupdate($row['id']);
                redirect(site_url('home'));
            }
            else {
                echo "gagal login";
            }
        }
        else {
            echo "masukan username dan password";
        }  
  	}
}
