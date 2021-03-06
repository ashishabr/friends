<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {


		public function __construct()
		{
			parent::__construct();
			$this->load->model('Logindb');
		}


	public function index()
	{
        $session = $this->load->library('session');
        $uid = $this->session->userdata('uid');
        if ($uid != null) 
        {
            redirect('dashboard');
        }
    	$reg_user = $this->input->post('reg_user');
    	$login_user = $this->input->post('login_user');
    	if(isset($reg_user))
    	{
    		$createuser = $this->RegisterUser();
    		if ($createuser == 1) 
    		{
    			redirect('dashboard');
    		}
            elseif ($createuser == 3) 
            {
                $data['user_check'] = 3;
            }
            else
            {
                $data['user_check'] = 2;
            }
    	}
    	elseif (isset($login_user)) 
    	{
    		$loginuser = $this->LoginUser();
    		if ($loginuser) 
    		{
                redirect('dashboard');
    		}
            else
            {
                $data['user_check'] = 1;
            }
    	}
    	$data['login_content'] = 'user/login_content';
    	$data['register_content'] = 'user/register_content';
        $this->load->view('layout/login',$data);
    }

    public function LoginUser()
    {
        $rname = $this->input->post('lemail');
        $rpass = $this->input->post('lpass');
        $pass = base64_encode($rpass);
        $data = [
            'user_email' => $rname,
            'user_pass'  => $pass,
        ];
        $user = $this->Logindb->get_user($data);
        if ($user) 
        {
            $this->session->set_userdata('uid', $user->user_id);
            return true;
        }
        else
        {
            return false;
        }
        
        
    }
    
	public function RegisterUser(){
		$data['user_name'] = $this->input->post('user_name');
		$data['user_email'] = $mail = $this->input->post('user_email');
        $data['user_country'] = $this->input->post('user_country');
		$pass = $this->input->post('user_pass');
		$data['user_pass'] = base64_encode($pass);
		$data['dob'] = date('Y-m-d',strtotime($this->input->post('dob')));
		$data['user_gender'] = $this->input->post('user_gender');
    	$data['designation'] = $this->input->post('designation');
    	$data['user_country'] = $this->input->post('user_country');
    	$data['fav_color'] = $this->input->post('fav_color');
    	$data['fav_actor'] = $this->input->post('fav_actor');
        
		 $datas = [
            'user_email'  => $mail,
        ];
        if ($data['user_name'] == "" || $data['user_email'] == "" || $data['user_country'] == "" || $pass == "" || $data['dob'] == "" || $data['user_gender'] == "" || $data['user_country'] == "" || $data['designation'] == "" || $data['fav_color'] == "" || $data['fav_actor'] == "") 
        {
            return 3;
        }
		$userchk = $this->Logindb->check_user($datas);
        if ($userchk == 1) 
        {
            return 0;
        }
        else
        {   
            $img_upload = $this->image_upload();
            if ($img_upload['status'] != 0) 
            {
                $image = $img_upload['data']['file_name'];
                $data['user_image'] = "uploads/".$image;

                $user = $this->Logindb->add_user($data);
                $this->session->set_userdata('uid', $user);

                if ($user) 
                {
                    return 1;
                }
                else
                {
                    return 0;
                }
            }
            
        }
		$this->Logindb->add_user($data);
		$session = array('success'=>'User has been created!');
		$this->session->set_userdata($session);
	}
	
	public function image_upload(){
		$path = APPPATH.'../uploads/';
		$config = array(
		'upload_path' => $path,
		'allowed_types' => 'jpg|jpeg|png',
		'max_size' => '2000000',
		'overwrite' => TRUE,
		);
		$this->load->library('upload',$config);
		if($this->upload->do_upload('user_image')){
			return  array('status' => 1 ,'data' => $this->upload->data());
		}else{
			
			return  array('status' => 0 ,'data' => $this->upload->display_errors());
		}
	}
	public function check_user($mail){
		$user = $this->Logindb->check_user($mail);
        if ($user) 
        {
            echo 1;
        }
        else
        {
            echo 0;
        }
	}
    public function logout()
    {
    	// die();
    	$session = $this->load->library('session');
        $this->session->sess_destroy();
    	return redirect()->to('/login');
    }
}
