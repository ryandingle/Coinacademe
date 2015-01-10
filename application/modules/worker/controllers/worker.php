<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Worker extends MX_Controller {
	
	function __construct(){
		parent::__construct();
		$this->load->config('pagination');
		$this->check_login();
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
    	$this->output->set_header('Pragma: no-cache');
	}
	
	public function index()
	{
		$data['title'] = 'Worker Page | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/front';
		
		$this->load->view('template/template',$data);
	}
	public function login(){$this->index();}
	public function register()
	{
		$data['title'] = 'Worker Page | Coinacademe';
		$data['header'] = 'includes/header';
		$data['footer'] = 'includes/footer';
		$data['content'] = 'pages/register';
		
		$this->load->view('template/template',$data);
	}
	public function check_validation()
	{
		if($this->form_validation->run() == FALSE)
		{
			$data['title'] = 'Worker Page | Coinacademe';
			$data['header'] = 'includes/header';
			$data['footer'] = 'includes/footer';
			$data['content'] = 'pages/front';
			$data['notice'] = '<div style="position: fixed;width: 100%;padding: 10px" class="validation shadow notice bg-red">
									<div class="fg-white span4" style="margin: 0px auto;">
										'.validation_errors('<small>','</small><br>').'
									</div>
								</div>';
			
			$this->load->view('template/template',$data);
		}
		else redirect('home/acounts/login?user=worker');
	}
	public function check_login()
	{
		if($this->session->userdata('logged_in')) redirect('worker/in');
		else return true;
	}
}