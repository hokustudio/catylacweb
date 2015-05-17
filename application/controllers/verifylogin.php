<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Verifylogin extends CI_Controller {
	public function userlogin()
	{
		if (!empty($_POST['username']) && !empty($_POST['password'])) {

            $this->load->model('usermodel');
            $check = $this->usermodel->getuserbyusername($_POST['username']);

            $login_ok = false;
            $pass = md5($_POST['password']);    
            foreach ($check as $key) {
                if ($check) {
                    if ($pass === $key['user_password']) 
                    {
                        $login_ok = true;
                    }
                }
            }
     
            if ($login_ok) {
                foreach ($check as $row) {
                    $array_items = array(
                        'user_id' => $row['user_id'],
                        'user_name' => $row['user_name'],
                        'logged_in' => true
                        );
                    $this->session->set_userdata($array_items);
                }

                if($row['user_role'] == 1)
                	echo "helo ".$row['user_name']." dihalaman admin";
                else
                	echo "helo ".$row['user_name']." dihalaman client";
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
