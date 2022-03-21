<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
            parent::__construct();
            $this->load->model('Logindb');
    }
    public function index()
    {
        $uid = $this->session->userdata('uid');
        if ($uid == null) 
        {
            redirect('login');
        }
        $session = $this->load->library('session');
        $uid = $this->session->userdata('uid');
    	$data['main_content'] = 'pages/dashboard';
        $user = $this->Logindb->get_all_user($uid);
    	$data['userdata'] = $user;

        $this->load->view('layout/layout',$data);
    }
    public function userprofile($uid)
    {
        $session = $this->load->library('session');
        $u_id = $this->session->userdata('uid');
        $data['main_content'] = 'pages/userprofile';
        $datas = [
            'user_id' => $uid,
        ];
        $user = $this->Logindb->get_user($datas);
        $data['userdata'] = $user;

        $myArray = explode(',', $user->friends);
        if(in_array($u_id, $myArray))
        {
            $data['addedfrnd'] = 1;
        }
        else
        {
            $data['addedfrnd'] = 0;
        }

        $this->load->view('layout/layout',$data);
    }
    public function search()
    {
        $session = $this->load->library('session');
        $uid = $this->session->userdata('uid');
        $data['main_content'] = 'pages/search';
        $datas = [
            'user_id' => $uid,
        ];
        $user = $this->Logindb->get_user($datas);
        $data['userdata'] = $user;

        $this->load->view('layout/layout',$data);
    }
    public function addfriend()
    {
        $user_id = $this->input->post('user_id');
        $data = [
            'user_id' => $user_id,
        ];
        $add = $this->Logindb->add_friend($data);
        echo $add;
    }
    public function searchfrnd()
    {
        $srch_val = $this->input->post('srch_val');
        $user = $this->Logindb->get_srch_user($srch_val);
        echo json_encode($user);
    }
    public function matches()
    {
        $session = $this->load->library('session');
        $uid = $this->session->userdata('uid');
        $data['main_content'] = 'pages/matches';
        $user = $this->Logindb->get_all_user($uid);
        // $data['userdata'] = $user;

        $datas = [
            'user_id' => $uid,
        ];
        $user1 = $this->Logindb->get_user($datas);
        // $data['mydata'] = $user1;
        $i = 0;
        if ($user != NULL) 
        {
            foreach($user as $userval)
            {   
                $flag = 0;
                if ($userval->fav_actor == $user1->fav_actor) 
                {
                    $flag++;
                }
                if ($userval->fav_color == $user1->fav_color) 
                {
                    $flag++;
                }
                if ($userval->designation == $user1->designation) 
                {
                    $flag++;
                }
                if ($userval->user_country == $user1->user_country) 
                {
                    $flag++;
                }

                $perc = ($flag * 100)/4;
                // echo $userval->user_name."_".$perc."-".$flag.":";
                if ($perc >= 50) 
                {
                    $arr[$i]['data'] = $userval;
                    $arr[$i]['prcnt'] = $perc;
                }
                $i++;
            }
            // die();
            $data['userdata'] = $arr;
        }
        else
        {
            $data['userdata'] = 0;
        }
        
        // echo json_encode($arr);
        // die();
        $this->load->view('layout/layout',$data);
    }
}
