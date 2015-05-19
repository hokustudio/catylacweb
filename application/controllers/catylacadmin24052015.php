<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class catylacadmin24052015 extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

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
            $this->load->view('headerfooter-dashboard/header_view_dashboard.php');
			$this->load->view('admin/admin_home_view.php');
            $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');
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

                $this->usermodel->lastloginupdate($row['id']);
                redirect(site_url('catylacadmin24052015/home'));
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
        $this->load->model("posts_model");
        
        $config['upload_path'] = './assets/images/uploads';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '100000000';
        $config['max_width']  = '2048';
        $config['max_height']  = '2048';

        $this->load->library('upload', $config);


        $data['content'] = NULL;
        $data['title'] = NULL;
        $data['category'] = array();
        $data['image'] = array();
        date_default_timezone_set('Asia/Jakarta');
    
        if (!empty($_POST['title']) && !empty($_POST['content'])) {
            $data['content'] = $_POST['content'];
            $data['title'] = $_POST['title'];
            $i=0;
            foreach ($_POST['category'] as $value) {
                $data['category'][$i] = $value;
                $i++;   
            }
            if ( ! $this->upload->do_upload('f_image'))
            {
                $data['image'] = array('error' => $this->upload->display_errors());
                $this->load->view('headerfooter-dashboard/header_view_dashboard.php');
                $this->load->view('admin/admin_add_post_view', $data);
                $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');
            }
            else
            {
                $data['image'] = array('upload_data' => $this->upload->data());
                $this->load->view('admin/admin_add_post_view', $data);

                $date = date('Y-m-d H:i:s', time());
                $post_params = array(
                    'title' => $data['title'],
                    'content' => $data['content'],
                    'category' => json_encode($data['category']),
                    'date_modified' => $date,
                    'date_created' =>  $date,
                    'author_id' => 1
                    );
                
                $media_params = array(
                    'title' => $data['title'],
                    'used_in' => 1,
                    'type' => 0,
                    'url' => $data['image']['upload_data']['full_path'],
                    'date_created' => $date
                    );
                $this->posts_model->insertPost($post_params, $media_params);
            }
        
        }else{
            $this->load->view('headerfooter-dashboard/header_view_dashboard.php');
            $this->load->view('admin/admin_add_post_view', $data);
            $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');
        }
            
    }
}
