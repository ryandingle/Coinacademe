<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acounts_Model extends CI_model {
	
	public function check_user_login()
	{
		$email = $this->security->xss_clean(trim($this->input->post('user-email')));
		$password = sha1($this->security->xss_clean(trim($this->input->post('user-password'))));
		
		$this->db->where('email',$email);
		$this->db->where('password',$password);
		$this->db->where('user_type',22);
		$user = $this->db->get('users');
		
		if($user->num_rows() == 1)
		{
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$this->db->where('user_type',22);
			$this->db->set('login_key',sha1($row->id+$row->email+date('Y-m-d H:i:s')+microtime()));
			$this->db->update('users');
			
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$this->db->where('user_type',22);
			$user1 = $this->db->get('users');
			$row = $user1->row();
			$data = array(
					'logged_in'		=>TRUE,
					'id'			=>$row->id,
					'email'			=>$row->email,
					'f_name'		=>$row->f_name,
					'l_name'		=>$row->l_name,
					'status'		=>$row->status,
					'active'		=>$row->active,
					'login_key'		=>$row->login_key,
					'user_type'		=>$row->user_type,
			);
			if(!$this->input->post('r-me')){
				//$this->session->sess_expiration = 0;
				$this->session->sess_expire_on_close = TRUE;
			}
			$this->session->set_userdata($data);
			return true;
		}
		return false;
	}
	public function register_worker()
	{
		$email = $this->security->xss_clean(trim($this->input->post('user-email')));
		$password = sha1($this->security->xss_clean(trim($this->input->post('user-password'))));
		$data = array(
				'email'			=>$email,
				'password'		=>$password,
				'role'			=>11,
				'status'		=>00,
				'active'		=>11,
				'user_type'		=>'c_worker',
				'verification' 	=> sha1($email+date('Y-m-d H:i:s')+microtime()),
			);
		$insert = $this->db->insert('workers',$data);
		if($insert)
		{	
			$this->db->where('email',$email);
			$this->db->where('password',$password);
			$new = $this->db->get('workers');
			
			$row = $new->row();
			$this->db->set('login_key',sha1($row->id+$row->email+microtime()));
			$this->db->update('workers');
			
			if($new->num_rows() == 1)
			{
				$data = array(
						'logged_in'		=>TRUE,
						'id'			=>$row->id,
						'email'			=>$row->email,
						'f_name'		=>$row->f_name,
						'l_name'		=>$row->l_name,
						'role'			=>$row->role,
						'status'		=>$row->status,
						'active'		=>$row->active,
						'login_key'		=>$row->login_key,
						'user_type'		=>$row->user_type,
				);
				$this->session->set_userdata($data);
				return true;
			}
			return false;
		}
	}
	
}
