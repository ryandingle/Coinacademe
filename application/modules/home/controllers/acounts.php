<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acounts extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->check_login();
		$this->load->model('acounts_model');
		$this->load->library('email');
		$this->load->helper('cookie');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
	}
	
	public function index()
	{
		//show_404();
		$data['title'] = 'Welcome to Coinacademe.';
		$data['header'] = 'includes/header';
		$data['content'] = 'pages/front';
		$data['footer'] = 'includes/footer';
		$data['notice'] = "";
		
		$this->load->view('template/template',$data);
	}
	public function login()
	{
		$data['title'] = 'Login | Coinacademe';
		$data['header'] = 'includes/header';
		$data['content'] = 'pages/login';
		$data['footer'] = 'includes/footer';
		if($this->form_validation->run() == FALSE)
		{
			$data['notice'] = '<div style="top: 45px;position: fixed;width: 100%;padding: 10px" class="validation shadow notice bg-red">
									<div class="fg-white span4" style="margin: 0px auto;">
										'.validation_errors('<small>','</small><br>').'
									</div>
								</div>';
		}
		else
		{
			$cheking = $this->acounts_model->check_user_login($user_type);
			if($cheking)
			{
				redirect('in');
			}
			else
			{
				$data['notice'] = '<div style="top: 45px;position: fixed;width: 100%;padding: 10px" class="validation notice bg-red">
									<div class="fg-white span4" style="margin: 0px auto">
										<center><small>Invalid <font class="fg-blue">Username</font> or <font class="fg-blue">Password.</font></small></center>
									</div>
								</div>';
			}
		}
		$this->load->view('template/template',$data);
	}
	public function register()
	{
		$data['title'] = 'Register | Coinacademe';
		$data['header'] = 'includes/header';
		$data['content'] = 'pages/register_valid';
		$data['footer'] = 'includes/footer';
		
		if($this->form_validation->run() == FALSE)
		{
			$data['notice'] = '<div style="top: 45px;position: fixed;width: 100%;padding: 10px" class="validation shadow notice bg-red">
									<div class="fg-white span4" style="margin: 0px auto;">
										'.validation_errors('<small>','</small><br>').'
									</div>
								</div>';
		}
		else
		{
			$email = $this->input->post('user-email');
			$this->db->where('email',$email);
			$get = $this->db->get('users');
			if($get->num_rows() > 0)
			{
				$data['notice'] = '<div style="top: 45px;position: fixed;width: 100%;padding: 10px" class="validation shadow notice bg-red">
									<div class="fg-white span4" style="margin: 0px auto">
										<small><font class="fg-blue">Email Address</font> already taken. Choose different Email Acount.<small>
									</div>
								</div>';
			}
			else
			{
				$cheking = $this->acounts_model->register_user();
				if($cheking)
				{
					$this->email->set_newline("\r\n");
					$this->email->from('COINACADEME.COM'); // change it to yours
				  	$this->email->to($this->input->post('user-email')); // change it to yours
				  	$this->email->subject('Verify your coinacademe acount.');
				  	$data = array('message'=>"Welcome to coinacademe.com");
				  	$email = $this->load->view('mails/user-verify', $data, TRUE);
				  	$this->email->message($email);
					$this->email->send();
					redirect('in');
				}
				else
				{
					$data['notice'] = '<div style="top: 45px;position: fixed;width: 100%;padding: 10px" class="validation shadow notice bg-red">
									<div class="fg-white span4" style="margin: 0px auto">
										<center><small>Invalid <font class="fg-blue">Username</font> or <font class="fg-blue">Password.</font></small></center>
									</div>
								</div>';
				}
					
			}
		}
		$this->load->view('template/template',$data);
	}
	
	public function logout()
	{	
		$this->session->unset_userdata('logged_in');
		$this->session->sess_destroy();
		delete_cookie("ci_session");
		
		if($_GET['user'] == 'user')   $this->index();
		if($_GET['user'] == 'worker') redirect('worker/login?key='.$_GET['key'].'&user=worker&status=logout');
		if($_GET['user'] == 'admin')  redirect('admin/login?key='.$_GET['key'].'&user=admin&status=logout');
		//else redirect('in');	
	}
	private function check_login()
	{
		if($this->session->userdata('logged_in'))
		{
			if($_GET['key'] == '')
			{
				redirect('in');
			}
			else
			{
				$this->db->where('id',$this->session->userdata('id'));
				$this->db->where('email',$this->session->userdata('email'));
				$this->db->where('user_type',$this->session->userdata('user_type'));
				$this->db->set('logout_key',$_GET['key']);
				$check = $this->db->update('users');
				if(!$check)
				{
					echo 'Please contact system engineer.';
				}
				else
				{
					$this->db->where('id',$this->session->userdata('id'));
					$this->db->where('email',$this->session->userdata('email'));
					$this->db->where('user_type',$this->session->userdata('user_type'));
					$user = $this->db->get('users');
					$row = $user->row();
					
					if($_GET['key'] == $row->logout_key)
					return true;
					else
					redirect('in');
				}
			}
		}
		else return true;
	}
	
}
