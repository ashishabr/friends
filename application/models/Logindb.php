<?php


class Logindb extends CI_Model {


	function add_user($data){
		if ($this->db->insert('user_reg',$data)) 
		{
			return $this->db->insert_id();
		}
		else
		{
			return false;
		}
	}
	public function check_user($data)
	{
		$this->db->select('*')->from('user_reg');
		$this->db->or_where($data);
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}
	public function get_user($data)
	{
		$this->db->select('*')->from('user_reg');
		$this->db->where($data);
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
			return $query->row();
		}
		else
		{
			return false;
		}
	}
	public function get_all_user($data)
	{
		$this->db->select('*')->from('user_reg');
		$this->db->where("user_id != ",$data);
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function get_srch_user($srchval)
	{
		$uid = $this->session->userdata('uid');
		$this->db->select('*')->from('user_reg');
		$this->db->where("user_id != ",$uid);
		$this->db->where("user_name LIKE '%".$srchval."%'");
		$this->db->order_by("created_date", "asc");
		$query = $this->db->get();
		if ($query->num_rows() > 0) 
		{
			return $query->result();
		}
		else
		{
			return false;
		}
	}
	public function add_friend($data)
	{
		$uid = $this->session->userdata('uid');

		$this->db->select('*')->from('user_reg');
		$this->db->where($data);
		$query = $this->db->get();
		$user = $query->row();
		if ($user->friends == 0) 
		{
			$friends = $uid;
		}
		else
		{
			$friends = $user->friends.",".$uid;
		}

		$data1['friends'] = $friends;

        $this->db->where($data);
        if($this->db->update('user_reg',$data1))
        {
        	echo 'success';
        }
        else
        {
        	echo "fail";
        }
	}
}
