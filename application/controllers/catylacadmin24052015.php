<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class catylacadmin24052015 extends CI_Controller {
	public function index()
	{
		if($this->session->userdata('logged_in')) 
		{
			redirect(site_url('catylacadmin24052015/home'));
		}
		else 
		{
			$this->load->view('admin/admin_login_view.php');
            //redirect(site_url('catylacadmin24052015'));
		}
      
	}

	public function login()
	{
		//$this->load->view('admin/admin_login_view.php');
	       redirect(site_url('catylacadmin24052015'));
           ///Klo Mau ada halaman baru lagi buat '/login'
    }

	public function home()
	{
		if($this->session->userdata('logged_in')) 
		{
			$this->load->view('admin/admin_home_view.php');
		}
		else 
		{
			//$this->load->view('admin/admin_login_view.php');
            redirect(site_url('catylacadmin24052015'));
		}
	}

	public function adminlogin()
	{
		if (!empty($_POST['username']) && !empty($_POST['password'])) {

            $this->load->model('usermodel');
            $check = $this->usermodel->getuserbyusername($_POST['username']);

            $login_ok = false;
            $pass = md5($_POST['password']);    
            foreach ($check as $key) {
                if ($check) {
                    if ($pass == $key['password'] && $key['role'] == 1) 
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
                        'logged_in' => true
                        );
                    $this->session->set_userdata($array_items);
                }

                //if($row['user_role'] == 1)
                	redirect(site_url('catylacadmin24052015/home'));
                //else
                //	echo "helo ".$row['user_name']." dihalaman client";
            }
            else {
            	echo "username or pass invalid";
            	$this->load->view('admin/admin_login_view.php');
                
            }
        }
        else {
        	echo "username or pass invalid";
        	$this->load->view('admin/admin_login_view.php');
        }      
    }


	public function adminlogout()
	{
		$this->session->unset_userdata('logged_in');
    	$this->session->sess_destroy();
    	//session_destroy();
    	redirect(site_url('catylacadmin24052015'));
	}

    public function addpost()
    {
        $this->load->view('admin/admin_add_post_view');
    }
}
