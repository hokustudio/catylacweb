<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class catylacadmin2015 extends CI_Controller {

    function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
    }

    public function deletePost($id){
        if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
        {
            $this->load->model("posts_model");
            $this->posts_model->deletePostByID($id);
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            redirect(site_url('catylacadmin2015'));
        }
    }

    public function publish($id){
        if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
        {
            $this->load->model("posts_model");
            $this->posts_model->publishPost($id);
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            redirect(site_url('catylacadmin2015'));
        }
    }
    public function draft($id){
        if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
        {
            $this->load->model("posts_model");
            $this->posts_model->draftPost($id);
            redirect($_SERVER['HTTP_REFERER']);
        }else{
            redirect(site_url('catylacadmin2015'));
        }
    }

	public function index()
	{
        
		if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
		{
			redirect(site_url('catylacadmin2015/allpost'));
		}
		else 
		{
            $data['alert'] = "";
			$this->load->view('admin/admin_login_view.php', $data);
            //redirect(site_url('catylacadmin24052015'));
		}
      
	}

	public function login()
	{
		//$this->load->view('admin/admin_login_view.php');
	       redirect(site_url('catylacadmin2015'));
           ///Klo Mau ada halaman baru lagi buat '/login'
    }

	public function home()
	{
		if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
		{
            $this->load->model("posts_model");
            $post['allpost'] = count($this->posts_model->GetAllPost());
            $post['draft'] = count($this->posts_model->GetDraftPost());
            $post['published'] = count($this->posts_model->GetPublishedPost());

            $this->load->view('headerfooter-dashboard/header_view_dashboard.php',$post);
			$this->load->view('admin/admin_home_view.php');
            $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');

		}
		else 
		{
			//$this->load->view('admin/admin_login_view.php');
            redirect(site_url('catylacadmin2015'));
		}
	}

    public function allPost(){
        if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
        {
            $this->load->model("posts_model");
            $posts = $this->posts_model->GetAllPost();

            $post['allpost'] = count($posts);
            $post['draft'] = count($this->posts_model->GetDraftPost());
            $post['published'] = count($this->posts_model->GetPublishedPost());
            $post['head_name'] = "All Post";

            $data['total'] = $post['allpost'];

            date_default_timezone_set('Asia/Jakarta');
            $i = 0;
            foreach ($posts as $pos) {
                $data['id'][$i] =  $pos['id'];
                $data['title'][$i] =  $pos['title'];
                $date = date_create($pos['date_modified']);
                $data['date'][$i] = date_format($date,"M,d Y");
                $data['author'][$i] = "Admin";//$pos['author_id'];
                $data['category'][$i] = $this->posts_model->getPostCategoryName($pos['id']);
                switch ($pos['flag']) {
                    case 1: //published
                        $data['status'][$i] ="Published";
                        break;
                    case 2: //draft
                        $data['status'][$i] = "Draft";
                        break;
                    default:
                        $data['status'][$i] = "Deleted";
                        break;
                }
                $data['flag'][$i] = $pos['flag'];
                $i++;
            }

            $this->load->view('headerfooter-dashboard/header_view_dashboard.php',$post);
            $this->load->view('admin/admin_all_post_view.php',$data);
            $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');

        }
        else 
        {
            //$this->load->view('admin/admin_login_view.php');
            redirect(site_url('catylacadmin2015'));
        }
    }

    public function draftPost(){
        if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
        {
            $this->load->model("posts_model");
            $posts = $this->posts_model->GetDraftPost();

            $post['allpost'] = count($this->posts_model->GetAllPost());
            $post['draft'] = count($posts);
            $post['published'] = count($this->posts_model->GetPublishedPost());
            $post['head_name'] = "Draft Post";

            $data['total'] = $post['draft'];

            date_default_timezone_set('Asia/Jakarta');
            $i = 0;
            foreach ($posts as $pos) {
                $data['id'][$i] =  $pos['id'];
                $data['title'][$i] =  $pos['title'];
                $date = date_create($pos['date_modified']);
                $data['date'][$i] = date_format($date,"M,d Y");
                $data['author'][$i] = "Admin";//$pos['author_id'];
                $data['category'][$i] = $this->posts_model->getPostCategoryName($pos['id']);
                switch ($pos['flag']) {
                    case 1: //published
                        $data['status'][$i] ="Published";
                        break;
                    case 2: //draft
                        $data['status'][$i] = "Draft";
                        break;
                    default:
                        $data['status'][$i] = "Deleted";
                        break;
                }
                $data['flag'][$i] = $pos['flag'];
                $i++;
            }

            $this->load->view('headerfooter-dashboard/header_view_dashboard.php',$post);
            $this->load->view('admin/admin_all_post_view.php',$data);
            $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');

        }
        else 
        {
            //$this->load->view('admin/admin_login_view.php');
            redirect(site_url('catylacadmin2015'));
        }
    }

    public function publishedPost(){
        if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
        {
            $this->load->model("posts_model");
            $posts = $this->posts_model->GetPublishedPost();

            $post['allpost'] = count($this->posts_model->GetAllPost());
            $post['draft'] = count($this->posts_model->GetDraftPost());
            $post['published'] = count($posts);
            $post['head_name'] = "Published Post";

            $data['total'] = $post['published'];

            date_default_timezone_set('Asia/Jakarta');
            $i = 0;
            foreach ($posts as $pos) {
                $data['id'][$i] =  $pos['id'];
                $data['title'][$i] =  $pos['title'];
                $date = date_create($pos['date_modified']);
                $data['date'][$i] = date_format($date,"M,d Y");
                $data['author'][$i] = "Admin";//$pos['author_id'];
                $data['category'][$i] = $this->posts_model->getPostCategoryName($pos['id']);
                switch ($pos['flag']) {
                    case 1: //published
                        $data['status'][$i] ="Published";
                        break;
                    case 2: //draft
                        $data['status'][$i] = "Draft";
                        break;
                    default:
                        $data['status'][$i] = "Deleted";
                        break;
                }
                $data['flag'][$i] = $pos['flag'];
                $i++;
            }

            $this->load->view('headerfooter-dashboard/header_view_dashboard.php',$post);
            $this->load->view('admin/admin_all_post_view.php',$data);
            $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');

        }
        else 
        {
            //$this->load->view('admin/admin_login_view.php');
            redirect(site_url('catylacadmin2015'));
        }
    }

    public function editpost($id)
    {
        if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
        {
            $this->load->model("posts_model");

            $post['allpost'] = count($this->posts_model->GetAllPost());
            $post['draft'] = count($this->posts_model->GetDraftPost());
            $post['published'] = count($this->posts_model->GetPublishedPost());  
            
            $config['upload_path'] = './assets/images/uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000000';
            $config['max_width']  = '10000';
            $config['max_height']  = '10000';

            $this->load->library('upload', $config);

            $all = $this->posts_model->getAllCategory();
            $post['allcategory'] = count($all);
            $i=0;
            foreach ($all as $one) {
                $data['cat_id'][$i] = $one['id'];
                $data['cat_name'][$i] = $one['name'];   
                $i++;   
            }        
            $catid = $this->posts_model->getPostCategoryID($id);
            foreach ($catid as $cat) {
                $data['category_checked'][$cat['category_id']] = 1;
            }
            
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
                $image = $this->posts_model->getPostImage($id);
                $data['image'] = $image[0];

                if ( ! $this->upload->do_upload('f_image'))
                {
                    $date = date('Y-m-d H:i:s', time());
                    $post_params = array(
                        'id' => $id,
                        'media_id' => $data['image']['id'],
                        'title' => $data['title'],
                        'content' => $data['content'],
                        'category' => $data['category'],
                        'date_modified' => $date,
                        'author_id' => 1,
                        'flag' => 2,
                        'count' => 0
                        );

                    $this->posts_model->editOnlyPost($post_params);
                    redirect(site_url('catylacadmin2015/allpost'));
                }
                else
                {
                    $data['image'] = array('upload_data' => $this->upload->data());

                    $date = date('Y-m-d H:i:s', time());
                    $post_params = array(
                        'id' => $id,
                        'title' => $data['title'],
                        'content' => $data['content'],
                        'category' => $data['category'],
                        'date_modified' => $date,
                        'author_id' => 1,
                        'flag' => 2,
                        'count' => 0
                        );
                    
                    $media_params = array(
                        'title' => $data['title'],
                        'type' => 0,
                        'description' => "-",
                        'url' => base_url()."assets/images/uploads/".$data['image']['upload_data']['file_name'],
                        'date_created' => $date
                        );
                    //print_r($media_params);
                    $this->posts_model->editPostAndMedia($post_params, $media_params);
                    //redirect(site_url('catylacadmin2015/allpost'));
                }
            }else{
                $posts = $this->posts_model->GetPost($id);

                date_default_timezone_set('Asia/Jakarta');
                foreach ($posts as $pos) {
                    $data['id'] =  $pos['id'];
                    $image = $this->posts_model->getPostImage($pos['id']);
                    $data['image'] = $image[0];
                    $data['title'] =  $pos['title'];
                    $data['content'] =  $pos['content'];
                    $date = date_create($pos['date_modified']);
                    $data['date'] = date_format($date,"M,d Y");
                    $data['author'] = "Admin";//$pos['author_id'];
                    $data['category'] = $this->posts_model->getPostCategoryName($pos['id']);
                    switch ($pos['flag']) {
                        case 1: //published
                            $data['status'] ="Published";
                            break;
                        case 2: //draft
                            $data['status'] = "Draft";
                            break;
                        default:
                            $data['status'] = "Deleted";
                            break;
                    }
                }

                $this->load->view('headerfooter-dashboard/header_view_dashboard.php',$post);
                $this->load->view('admin/admin_edit_post_view.php',$data);
                $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');

            }
        }
        else 
        {
                //$this->load->view('admin/admin_login_view.php');
                redirect(site_url('catylacadmin2015'));
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
                        'user_role' => $row['role'],
                        'logged_in_admin' => true
                        );
                    $this->session->set_userdata($array_items);
                }

                $this->usermodel->lastloginupdate($row['id']);
                redirect(site_url('catylacadmin2015/allpost'));
            }
            else {
            	$data['alert'] = "username or pass invalid";
            	$this->load->view('admin/admin_login_view.php',$data);
                //redirect(site_url('catylacadmin24052015'),$alert);
                
            }
        }
        else {
        	$data['alert'] = "username or pass invalid";
            $this->load->view('admin/admin_login_view.php',$data);
        }      
    }


	public function adminlogout()
	{
		$this->session->unset_userdata('logged_in_admin');
    	$this->session->sess_destroy();
    	redirect(site_url('catylacadmin2015'));
	}

    public function addCategory()
    {
        if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
        {
            $this->load->model("posts_model");

            $post['allpost'] = count($this->posts_model->GetAllPost());
            $post['draft'] = count($this->posts_model->GetDraftPost());
            $post['published'] = count($this->posts_model->GetPublishedPost());  

            $data = array();
        
            if (!empty($_POST['name'])) {
                $this->posts_model->addCategory($_POST);
                $all = $this->posts_model->getAllCategory();
                $post['allcategory'] = count($all);
                $i=0;
                foreach ($all as $one) {
                    $data['id'][$i] = $one['id'];   
                    $data['name'][$i] = $one['name'];   
                    $data['description'][$i] = $one['description'];
                    $i++;
                }
                $this->load->view('headerfooter-dashboard/header_view_dashboard.php',$post);
                $this->load->view('admin/admin_add_category_view', $data);
                $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');
                
            }else{
                $all = $this->posts_model->getAllCategory();
                $post['allcategory'] = count($all);
                $i=0;
                foreach ($all as $one) {
                    $data['id'][$i] = $one['id'];
                    $data['name'][$i] = $one['name'];   
                    $data['description'][$i] = $one['description'];
                    $i++;   
                }
                $this->load->view('headerfooter-dashboard/header_view_dashboard.php',$post);
                $this->load->view('admin/admin_add_category_view', $data);
                $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');    
            }
        }else{
            redirect(site_url('catylacadmin2015'));
        }
    }

    public function addpost()
    {
        if($this->session->userdata('logged_in_admin') && $this->session->userdata('user_role') == 1) 
        {
            $this->load->model("posts_model");

            $post['allpost'] = count($this->posts_model->GetAllPost());
            $post['draft'] = count($this->posts_model->GetDraftPost());
            $post['published'] = count($this->posts_model->GetPublishedPost());  
            
            $config['upload_path'] = './assets/images/uploads';
            $config['allowed_types'] = 'gif|jpg|png';
            $config['max_size'] = '100000000';
            $config['max_width']  = '10000';
            $config['max_height']  = '10000';

            $this->load->library('upload', $config);

            $all = $this->posts_model->getAllCategory();
            $post['allcategory'] = count($all);
            $i=0;
            foreach ($all as $one) {
                $data['cat_id'][$i] = $one['id'];
                $data['cat_name'][$i] = $one['name'];   
                $i++;   
            }        


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
                if ( ! $this->upload->do_upload('f_image')){
                    $data['image'] = array('error' => $this->upload->display_errors());
                    $this->load->view('headerfooter-dashboard/header_view_dashboard.php',$post);
                    $this->load->view('admin/admin_add_post_view', $data);
                    $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');
                }else{
                    $data['image'] = array('upload_data' => $this->upload->data());

                    $date = date('Y-m-d H:i:s', time());
                    $post_params = array(
                        'title' => $data['title'],
                        'content' => $data['content'],
                        'category' => $data['category'],
                        'date_modified' => $date,
                        'date_created' =>  $date,
                        'author_id' => 1,
                        'flag' => 2,
                        'count' => 0
                        );
                    
                    $media_params = array(
                        'title' => $data['title'],
                        'type' => 0,
                        'description' => "-",
                        'url' => base_url()."assets/images/uploads/".$data['image']['upload_data']['file_name'],
                        'date_created' => $date
                        );
                    $this->posts_model->insertPost($post_params, $media_params);
                    redirect(site_url('catylacadmin2015/allpost'));
                }
            
            }else{
                $this->load->view('headerfooter-dashboard/header_view_dashboard.php',$post);
                $this->load->view('admin/admin_add_post_view', $data);
                $this->load->view('headerfooter-dashboard/footer_view_dashboard.php');
            }  
        }else{
            redirect(site_url('catylacadmin2015'));
        }          
    }
}
