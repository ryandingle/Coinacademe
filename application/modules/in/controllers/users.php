<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends MX_Controller {
	
	public function __construct(){
		parent::__construct();
		$this->is_logged_in();
		$this->load->library('email');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
	}
	
	public function index()
	{
		show_404();
	}
	public function verify()
	{
		$this->db->where('verification',$this->uri->segment(4));
		$get = $this->db->get('users');
		$row = $get->row();
		if($row->status == 'verified'){
			echo 'Your acount has been verified.';
		}
		else{
			if($this->uri->segment(4) == $row->verification){
				$this->db->set('status','11');
				$this->db->update('users');
			}else{
				redirect('in');
			}
		}
		redirect('in');
	}
	public function resend_email()
	{
		if($this->session->userdata('verification') == '11'){
			redirect('in');
		}
		else{
			$this->db->set('verification',sha1($email+date('Y-m-d H:i:s')+microtime()));
			$this->db->where('email',$this->session->userdata('email'));
			$this->db->where('id',$this->session->userdata('id'));
			$this->db->update('users');
			
			$this->email->set_newline("\r\n");
			$this->email->from('COINACADEME.COM'); // change it to yours
			$this->email->to($this->session->userdata('email')); // change it to yours
			$this->email->subject('Verify your coinacademe acount.');
			$data = array('message'=>"Welcome to coinacademe.com");
			$email = $this->load->view('mails/user-verify', $data, TRUE);
			$this->email->message($email);
			$this->email->send();
			redirect('in');
		}
	}
	private function is_logged_in()
	{
		if($this->session->userdata('logged_in')) return true;
		else redirect(base_url());
	}
}

;?>