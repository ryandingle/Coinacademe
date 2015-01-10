<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Acounts extends MX_Controller {
	
	function __construct(){
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
		show_404();
	}
	public function login()
	{
		$data['title'] = 'Worker Login | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/front';
		if($this->form_validation->run() == FALSE)
		{
			$data['notice'] = '<div style="position: fixed;width: 100%;padding: 10px" class="validation shadow notice bg-red">
									<div class="fg-white span4" style="margin: 0px auto;">
										'.validation_errors('<small>','</small><br>').'
									</div>
								</div>';
		}
		else
		{	
			$cheking = $this->acounts_model->check_user_login();
			if($cheking)
			{
				redirect('worker/in');
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
	public function check_login()
	{
		if($this->session->userdata('logged_in')) redirect('worker/in');
		else return true;
	}
}